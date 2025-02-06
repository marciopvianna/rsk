<?php
include('session.php');
include('config.php');

$juiz = filter_input(INPUT_POST, 'juiz');
$nota = filter_input(INPUT_POST, 'nota');
$ip = filter_input(INPUT_POST, 'ip');
$round = filter_input(INPUT_POST, 'round');
$heat = filter_input(INPUT_POST, 'heat');
$atleta = filter_input(INPUT_POST, 'atleta');
$onda = filter_input(INPUT_POST, 'onda');

// Armazenar o último round e heat na sessão
$_SESSION['last_round'] = $round;
$_SESSION['last_heat'] = $heat;

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
} else {
    $sql = "INSERT INTO notas (juiz, ip, round, heat, atleta, onda, nota)
            VALUES ('$juiz', '$ip', '$round', '$heat', '$atleta', '$onda', '$nota')";
    if ($conn->query($sql)) {
        updateBaterias($conn, $round, $heat, $atleta);
        header("Location: welcome.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

function updateBaterias($conn, $round, $heat) {
    // Buscar todas as notas dos atletas no mesmo round e heat
    $sql = "SELECT atleta, nota FROM notas WHERE round = $round AND heat = $heat ORDER BY atleta, nota DESC";
    $result = $conn->query($sql);

    $notas = [];
    while ($row = $result->fetch_assoc()) {
        $notas[$row['atleta']][] = $row['nota'];
    }

    foreach ($notas as $atleta => $notas_atleta) {
        $nota_1 = isset($notas_atleta[0]) ? $notas_atleta[0] : 0;
        $nota_2 = isset($notas_atleta[1]) ? $notas_atleta[1] : 0;
        $somatorio = $nota_1 + $nota_2;

        // Atualizar os campos nota_1, nota_2 e somatorio na tabela baterias
        $sql = "UPDATE baterias SET nota_1 = $nota_1, nota_2 = $nota_2, somatorio = $somatorio WHERE round = $round AND heat = $heat AND atleta = $atleta";
        $conn->query($sql);
    }

    // Verificar o maior somatorio dentro do round e heat de todos os atletas
    $sql = "SELECT MAX(somatorio) AS maior_somatorio FROM baterias WHERE round = $round AND heat = $heat";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $maior_somatorio = $row['maior_somatorio'];

    // Atualizar a coluna nota_faltando para todos os atletas no round e heat
    foreach ($notas as $atleta => $notas_atleta) {
        $nota_1 = isset($notas_atleta[0]) ? $notas_atleta[0] : 0;
        $somatorio = $nota_1 + (isset($notas_atleta[1]) ? $notas_atleta[1] : 0);

        if ($somatorio == $maior_somatorio) {
            $sql = "UPDATE baterias SET nota_faltando = NULL WHERE round = $round AND heat = $heat AND atleta = $atleta";
        } else {
            $nota_faltando = $maior_somatorio - $nota_1 + 0.10;
            $sql = "UPDATE baterias SET nota_faltando = $nota_faltando WHERE round = $round AND heat = $heat AND atleta = $atleta";
        }
        $conn->query($sql);
    }
}
?>