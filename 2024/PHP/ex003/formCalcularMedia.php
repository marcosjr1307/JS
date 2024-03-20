<?php
    if($_SERVER["REQUEST_METHOD"] === 'GET'){
        $media = "";
        $situacao = "";
    }else if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $media = ($nota1+$nota2)/2;

        if($media >= 6.0){
            $situacao =  "<span class='ap' style>Aprovado!</span>";
        }else if(($media>3.0) && ($media< 6.0)){
            $situacao =  "<span class='dp'>Dependencia!</span>";
        }else{
            $situacao =  "<span class='rep'>Reprovado!</span>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <style>
        .ap{
            background-color: green;
        }
        .dp{
            background-color: yellow;
        }
        .rep{
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Cálculo de média</h1>
    <hr>
    <form method="post">
        Nota 1: <br>
        <input type="text" name="nota1" id="nota1" required>

        <br><br>

        Nota 2: <br>
        <input type="text" name="nota2" id="nota2" required>
        <br><br>

        <input type="submit" value="Calcular">
        <hr>
    </form>
    Média: <?=$media?> <br>
    <?=$situacao?>
</body>
</html>