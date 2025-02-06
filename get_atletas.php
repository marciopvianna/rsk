<?php
include('config.php');

$round = filter_input(INPUT_POST, 'round', FILTER_VALIDATE_INT);
$heat = filter_input(INPUT_POST, 'heat', FILTER_VALIDATE_INT);

if ($round && $heat) {
    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if (!$con) {
        die('Não foi possível conectar: ' . mysqli_error($con));
    }
    mysqli_select_db($con, DB_DATABASE);

    $sql = "SELECT a.id_atletas, a.nome FROM baterias b JOIN atletas a ON b.atleta = a.id_atletas WHERE b.round = $round AND b.heat = $heat";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['id_atletas'] . "'>" . $row['nome'] . "</option>";
    }
    mysqli_close($con);
}
?>