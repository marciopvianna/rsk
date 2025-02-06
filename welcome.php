<?php
   include('session.php');
   include('config.php');
   
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
   $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
   $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//whether ip is from remote address
else {
   $ip_address = $_SERVER['REMOTE_ADDR'];
}
//echo $ip_address;

$last_round = isset($_SESSION['last_round']) ? $_SESSION['last_round'] : '';
$last_heat = isset($_SESSION['last_heat']) ? $_SESSION['last_heat'] : '';
?>

<html>
   
   <head>
      <title>RSK - Lançamento de notas</title>
      <h1><font size="3" face="bold">Juiz logado: <font color="blue"><?php echo $login_session; ?></font></font></h1>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }

      </style>
      
      <style>
            table {
                width: 100%;
                border-collapse: collapse;
                font-size:14px;
            }

            table, td, th {
                border: 1px solid black;
                padding: 5px;
                font-size:12px;
            }

            th {text-align: left;}
      </style>

      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script>
        $(document).ready(function() {
            $('#round, #heat').on('change', function() {
                var round = $('#round').val();
                var heat = $('#heat').val();
                if (round && heat) {
                    $.ajax({
                        url: 'get_atletas.php',
                        type: 'POST',
                        data: {round: round, heat: heat},
                        success: function(data) {
                            $('#atleta').html(data);
                        }
                    });
                }
            });

            $('#atleta').on('change', function() {
                var round = $('#round').val();
                var heat = $('#heat').val();
                var atleta = $('#atleta').val();
                if (round && heat && atleta) {
                    $.ajax({
                        url: 'get_ultima_onda.php',
                        type: 'POST',
                        data: {round: round, heat: heat, atleta: atleta},
                        success: function(data) {
                            $('#onda').val(data);
                        }
                    });
                }
            });
        });
    </script>
      
   </head>
     
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">	
	      <img src="rsk.png"/><br><br>
      </div>
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #003366; " align = "center">
            <div style = "background-color:#003366; color:#FFFFFF; padding:3px;"><b>Envio da Nota</b></div>
				
            <div style = "margin:30px">
               
               <form action = "envio_nota.php" method = "post">

               <input type="hidden" name="juiz" required class="box" value='<?php echo $login_session?>' readonly/>
                    <input type='hidden' name='ip' required class="box" value='<?php echo $ip_address?>' />
                    <label>round&ensp;: </label><input type="number" id="round" placeholder='numero do round' name="round" value="<?php echo $last_round; ?>" required class="box" autofocus/><br /><br />
                    <label>heat &ensp;&ensp;: </label><input type="number" id="heat" placeholder='numero do heat' name="heat" value="<?php echo $last_heat; ?>" required class="box"/><br /><br />
                    
                    <label>atleta &ensp;: </label>
                    <select id="atleta" name="atleta" placeholder='escolha atleta' required class="box" type="number">
                        <option value="">Selecione o round e heat</option>
                    </select>
                    <label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
                    <br /><br />  
                        
                    <label>onda&ensp;&ensp;: </label><input type="number" id="onda" placeholder='sequencia de ondas' name="onda" required class="box"/><br /><br />
                    <label>nota &ensp;&ensp;: </label><input type="text" placeholder='0.5 a 10 (usar ponto)' name="nota" required class="box"/><br /><br />
                    <input type="Submit" value=" Enviar  "/><br />    

               </form>
                
            </div>
         </div>	
      </div>
       
      <br><br>
      
      <b>Últimas 5 notas:</b>
      <?php
        
        $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if (!$db) {
            die('Não foi possível conectar: ' . mysqli_error($db));
        }
        mysqli_select_db($db, DB_DATABASE);
        //$sql = "SELECT * FROM notas WHERE juiz='$login_session' ORDER BY id_nota DESC LIMIT 5";
        $sql = "SELECT t1.hora,t1.juiz,t1.round,t1.heat,t2.nome,t1.onda,t1.nota FROM (notas as t1, atletas as t2) WHERE t2.id_atletas=t1.atleta AND t1.juiz='$login_session' ORDER BY t1.id_nota DESC LIMIT 5";
        $result = mysqli_query($db, $sql);

        echo "<table>
        <tr>
        <th>Hora</th>
        <th>Juiz</th>
        <th>Round</th>
        <th>Heat</th>
        <th>Atleta</th>
        <th>Onda</th>
        <th>Nota</th>
        </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['hora'] . "</td>";
            echo "<td>" . $row['juiz'] . "</td>";
            echo "<td>" . $row['round'] . "</td>";
            echo "<td>" . $row['heat'] . "</td>";
            //echo "<td>" . $row['atleta'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['onda'] . "</td>";
            echo "<td>" . $row['nota'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($db);
        ?>
      
      <h2><a href = "listanotas.php"><font size="3" face="bold">Todas notas lançadas</font></a></h2>
      <h3><a href = "rounds.php"><font size="3" face="bold">Baterias</font></a></h3>
      <h4><a href = "logout.php"><font size="3" face="bold">Sair</font></a></h4>
   </body>
</html>