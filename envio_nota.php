<?php
include('session.php');

$juiz = filter_input(INPUT_POST, 'juiz');
$nota = filter_input(INPUT_POST, 'nota');
$ip = filter_input(INPUT_POST, 'ip');
$round = filter_input(INPUT_POST, 'round');
$heat = filter_input(INPUT_POST, 'heat');
$atleta = filter_input(INPUT_POST, 'atleta');
$onda = filter_input(INPUT_POST, 'onda');

$host = "localhost";
$dbusername = "delgrande";
$dbpassword = "dege01";
$dbname = "marcio";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_errno() .') '
	. mysqli_connect_error());
	}
		else{
		$sql = "INSERT INTO notas (juiz,ip,round,heat,atleta,onda,nota)
		values ('$juiz','$ip','$round','$heat','$atleta','$onda','$nota')";
			if ($conn->query($sql)){
			#echo "Nova nota inserida com sucesso";
			#session_start();
                            #if(session_destroy()) {
                            header("Location: welcome.php");
                            #}                         
                        }	
		#else{
		#echo "Erro: ". $sql ."
		#". $conn->error;
		}
		#$conn->close();
                
?>
