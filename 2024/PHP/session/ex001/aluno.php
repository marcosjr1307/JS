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
    <h2>Alunos</h2>
    <p>Página para alunos!</p>
    <a href="logout.php">Logout</a>
</body>
</html>