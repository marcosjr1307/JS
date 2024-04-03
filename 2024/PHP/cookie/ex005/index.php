<?php
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        $pagina = "";
    }else if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $pagina = "";
        
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        if(trim($login) != '' && trim($senha) != ''){
            if(($login == "professor") && ($senha == "1234")){
                header('Location: professor.html?login='.$login);
            }else if(($login == "aluno") && ($senha == "5678")){
                $login = 'Marcos';
                header('Location: aluno.php?login='.$login);
            }else{
                $erro = "Login ou senha inválidos";
                header('Location: erro.php?msg='.$erro);
            }
        }else{
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de login</title>
</head>
<body>
    <h1 style="text-align: center;">Sistema acadêmico</h1>
    <hr>

    <form method="post">
        Login: <br>
        <input type="text" name="login" id="login" required>
        <br><br>

        Senha: <br>
        <input type="password" name="senha" id="senha" required>
        <br> <br>

        <input type="submit" value="Ok">

        <?php
            if($pagina != ""){
                include $pagina;
            }
        ?>
    </form>
</body>
</html>