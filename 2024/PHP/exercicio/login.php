<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $senhaDefinida = "";
        $msg = "";
        $username = "";
        $senha = "";
    }else if($_SERVER["REQUEST_METHOD"] == "POST"){
        $senhaDefinida = md5("teste123");
        $senhaDefinida = crypt($senhaDefinida, "CoT1lUniCAmP");
        $msg = "";
        if(isset($_POST["username"]) && isset($_POST["senha"])){
            $username = trim($_POST["username"]);
            $senha = trim($_POST["senha"]);
            if(($username === "") || ($senha === "")){
                $msg = "Informe um usário e senha!";
            }else if(strlen($username) < 5){
                $msg = "O username precisa ter no mínimo 5 caracteres";
            }else if(strlen($senha) < 8){
                $msg = "A senha precisa tem no mínimo 8 caracteres";
            }else if(crypt(md5($senha), "CoT1lUniCAmP") != $senhaDefinida){
                echo "Senha" . crypt(md5($senha), "CoT1lUniCAmP");    
                $msg = "A senha informada está incorreta!";
            }else{
                setcookie("InfoUser-username", $username, time()+3600, "/");
                header("Location: home.php");
            }
        }   
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            text-align: center;
        }
        .container{
            text-align: center;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;

        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="post" style="margin-bottom: 10px;">
            <p style="text-align: left; margin-top: 20px;" >Username</p>
            <input type="text" name="username" id="username">
            <br> <br>
            <p style="text-align: left;">Senha</p>
            <input type="text" name="senha" id="senha">
            <br> <br>
            <input style="width: 173px; padding: 10px;" type="submit" value="Login">
        </form>
        <span class="mensagem" style="color: red"><?=$msg?></span>
    </div>
</body>
</html>