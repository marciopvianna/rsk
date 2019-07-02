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

                <form>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationServer01">Primeiro nome</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nome" value="Mark" required>
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer02">Sobrenome</label>
                            <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Sobrenome" value="Otto" required>
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServerUsername">Usuário</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                </div>
                                <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend3" required>
                                <div class="invalid-feedback">
                                    Por favor, escolha um nome de usuário.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer03">Cidade</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Cidade" required>
                            <div class="invalid-feedback">
                                Por favor, informe uma cidade válida.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationServer04">Estado</label>
                            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Estado" required>
                            <div class="invalid-feedback">
                                Por favor, informe um estado válido.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationServer05">CEP</label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="CEP" required>
                            <div class="invalid-feedback">
                                Por favor, informe um CEP válido.
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>

	
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>