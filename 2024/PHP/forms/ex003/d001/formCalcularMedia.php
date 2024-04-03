<?php
    if($_SERVER["REQUEST_METHOD"] === 'GET'){
        $dobro = "";
        $triplo = "";
        $quadrado = "";
    }else if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $n1 = $_POST["n1"];
        $dobro = 2*$n1;
        $triplo = 3*$n1;
        $quadrado = $n1*$n1;
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
        Número: <br>
        <input type="text" name="n1" id="n1" required>

        <br><br>

        <input type="submit" value="Calcular">
        <hr>
    </form>
    Dobro: <span style="font-weight: bold;"><?=$dobro?></span> <br>
    Triplo: <span style="font-weight: bold;"><?=$triplo?></span> <br> 
    Quadrado: <span style="font-weight: bold;"><?=$quadrado?></span>
</body>
</html>