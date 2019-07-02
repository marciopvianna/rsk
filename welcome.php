<?php
   include('session.php');
   
   //whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
//echo $ip_address;
  
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
                    <label>round&ensp;: </label><input type="number" placeholder='numero do round' name="round" required class="box" autofocus/><br /><br />
                    <label>heat &ensp;&ensp;: </label><input type="number" placeholder='numero do heat' name="heat" required class="box"/><br /><br />
<!--                    <label>atleta &ensp;: </label><input type="text" placeholder='nome do surfista' name="atleta" required class="box"/><br /><br />-->
                    
                    <label>atleta &ensp;: </label>
                            <select name="atleta" placeholder='escolha atleta' required class="box" type="number">
                                <option value=""></option>
                                <option value="1">Kbeca</option>
                                <option value="2">Caxa</option>
                                <option value="3">Guedera</option>
                                <option value="4">Burns</option>
                                <option value="5">Milho</option>
                                <option value="6">Nariga</option>
                                <option value="7">Vaqueiro</option>
                                <option value="8">Kombi</option>
                                <option value="9">Maca</option>
                                <option value="10">Davala</option>
                                <option value="11">Chines</option>
                                <option value="12">Guto</option>
                                <option value="13">Gigante</option>
                                <option value="14">Marcio</option>
                                <option value="15">Lingue</option>
                                <option value="16">Drup</option>
                            </select>
                    <label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
                    <br /><br />  
                        
                    <label>onda&ensp;&ensp;: </label><input type="number" placeholder='sequencia de ondas' name="onda" required class="box"/><br /><br />
                    <label>nota &ensp;&ensp;: </label><input type="text" placeholder='0.5 a 10 (usar ponto)' name="nota" required class="box"/><br /><br />
                    <input type="Submit" value=" Enviar  "/><br />              
               </form>
                
               <!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php #echo $error; ?></div>-->
            </div>
         </div>	
      </div>
       
      <br><br>
      
      <b>Últimas 5 notas:</b>
      <?php
        
        $con = mysqli_connect('localhost', 'delgrande', 'dege01', 'marcio');
        if (!$con) {
            die('Não foi possível conectar: ' . mysqli_error($con));
        }
        mysqli_select_db($con, "ajax_demo");
        //$sql = "SELECT * FROM notas WHERE juiz='$login_session' ORDER BY id_nota DESC LIMIT 5";
        $sql = "SELECT t1.hora,t1.juiz,t1.round,t1.heat,t2.nome,t1.onda,t1.nota FROM (notas as t1, atletas as t2) WHERE t2.id_atletas=t1.atleta AND t1.juiz='$login_session' ORDER BY t1.id_nota DESC LIMIT 5";
        $result = mysqli_query($con, $sql);

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
        mysqli_close($con);
        ?>
      
      <h2><a href = "listanotas.php"><font size="3" face="bold">Todas notas lançadas</font></a></h2>
      <h3><a href = "rounds.php"><font size="3" face="bold">Baterias</font></a></h3>
      <h4><a href = "logout.php"><font size="3" face="bold">Sair</font></a></h4>
   </body>
</html>