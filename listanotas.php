<?php
include('session.php');
include('config.php');
   
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
        <title>Exemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- <script src="../js/jquery-3.3.1.js" ></script> -->
        <!-- <script src="../js/jquery.dataTables.min.js" ></script> -->
        <!-- <script src="../js/dataTables.bootstrap.min.js" ></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

	<script>
		$(document).ready(function() {
    			$('#example').DataTable();
		} );
	</script>
        
        <!-- <link rel= "stylesheet" href= "../css/dataTables.bootstrap.min.css" >  -->
        <!-- <link rel= "stylesheet" href= "../css/bootstrap_1.min.css" > -->
        <link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel= "stylesheet" href= "https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" >
        
    </head>
    
    <body>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Hora</th>
                <th>Juiz</th>
                <th>Round</th>
                <th>Heat</th>
                <th>Atleta</th>
                <th>Onda</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if (!$con) {
            die('Não foi possível conectar: ' . mysqli_error($con));
        }
        mysqli_select_db($con, DB_DATABASE);

        $sql = "SELECT t1.hora,t1.juiz,t1.round,t1.heat,t2.nome,t1.onda,t1.nota FROM (notas as t1, atletas as t2) WHERE t2.id_atletas=t1.atleta AND t1.juiz='$login_session' ORDER BY t1.id_nota DESC";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['hora'] . "</td>";
            echo "<td>" . $row['juiz'] . "</td>";
            echo "<td>" . $row['round'] . "</td>";
            echo "<td>" . $row['heat'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['onda'] . "</td>";
            echo "<td>" . $row['nota'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
        </tbody>
    </table>
    <h1><a href = "welcome.php"><font size="3" face="bold">Voltar</font></a></h1>
    </body>
</html>
