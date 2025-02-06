<?php
include('config.php');
session_start();

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (!$db) {
    die('Não foi possível conectar: ' . mysqli_error($db));
}

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db, "SELECT nome FROM juizes WHERE nome = '$user_check'");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['nome'];

if (!isset($_SESSION['login_user'])) {
    header("location:login.php");
    die();
}
?>