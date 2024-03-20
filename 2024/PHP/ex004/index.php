<?php
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        $pagina = "";
    }else if($_SERVER["REQUEST_METHOD"] == 'POST'){
        
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