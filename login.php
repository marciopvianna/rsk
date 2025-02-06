<?php
include("config.php");
session_start();

$error = NULL;

// Estabelecer conexão com o banco de dados
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (!$db) {
    die('Não foi possível conectar: ' . mysqli_error($db));
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form 

$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']); 

    $sql = "SELECT id_juiz FROM juizes WHERE nome = '$myusername' and senha = '$mypassword'";
        error_log($sql);
        $result = mysqli_query($db, $sql);
        
        if ($result) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            error_log(print_r($row, true)); // Log the row as a string
            $count = mysqli_num_rows($result);

            // If result matched $myusername and $mypassword, table row must be 1 row
            if ($count == 1) {
                $_SESSION['login_user'] = $myusername;
                header("location: welcome.php");
            } else {
                $error = "Usuário ou Senha não são válidos!";
            }
        } else {
            $error = "Erro na consulta ao banco de dados!";
        }

}
?>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">   
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RSK - Login</title>      
        <link rel= "stylesheet" href= "css/login.css" > 
        <link rel= "stylesheet" href= "css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                <div class="col-md-8 col-lg-6">
                    <div class="login d-flex align-items-center py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">
                                    <h3 class="login-heading mb-4">Bem vindo!</h3>
                                    <form action = "" method = "post">
                                        <div class="form-label-group">
                                            <input type="text" id="inputNome" name="username" class="form-control" placeholder="Digite seu nome" required autofocus>
                                            <label for="inputNome">Usuario</label>
                                        </div>

                                        <div class="form-label-group">
                                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Digite sua senha" required>
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                      
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Lembrar senha</label>
                                        </div>
                                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Entrar</button>
                                        
                                    </form>
                                    
                                    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src= "js/Bootstrap.min.js" ></script>
        <script src= "js/login.js" ></script>
        <script src= "js/bootstrap.bundle.min" ></script>
    </body>
</html>
