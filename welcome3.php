<?php
include('session.php');

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
?>

<html>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <head>
        <title>RSK - Lançamento de notas</title>
    

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

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Envio de notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listanotas.php">Notas lançadas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rounds.php">Baterias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="welcome.php">Juiz logado: <font color="red"><?php echo $login_session; ?></font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sair</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Título especial</h5>
    <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>

    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>