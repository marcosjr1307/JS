<?php
    session_start();
    if(!isset($_SESSION["login"])){
        $msg = "Login ou senha inválidos!";
        header("location: erro.php?msg=.$msg");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor</title>
</head>
<body>
    <a href="#">Lançamento de notas</a>
    |
    <a href="#">Faltas</a>
    |
    <a href="logout.php">Logout</a>
    <h2>Professor</h2>
    <p>Página para professores!</p>
</body>
</html>