<?php
    session_start();
    if(!isset($_SESSION["login"])){
        $msg = "Login e/ou senha inválidos";
        header("Location: erro.php?msg=.$msg");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    |
    <hr>
    <h2>Alunos</h2>
    <p>Página para alunos!</p>
</body>
</html>