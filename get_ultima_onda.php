<?php
include('config.php');

$round = filter_input(INPUT_POST, 'round', FILTER_VALIDATE_INT);
$heat = filter_input(INPUT_POST, 'heat', FILTER_VALIDATE_INT);
$atleta = filter_input(INPUT_POST, 'atleta', FILTER_VALIDATE_INT);

if ($round && $heat && $atleta) {
    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if (!$con) {
        die('Não foi possível conectar: ' . mysqli_error($con));
    }
    mysqli_select_db($con, DB_DATABASE);

    $sql = "SELECT MAX(onda) AS ultima_onda FROM notas WHERE round = $round AND heat = $heat AND atleta = $atleta";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $ultima_onda = isset($row['ultima_onda']) ? $row['ultima_onda'] + 1 : 1;
    echo $ultima_onda;

    mysqli_close($con);
}
?>