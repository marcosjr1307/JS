<?php

if(isset($_POST["ra"]) || $_POST["nome"] || $_POST["curso"] == ""){
    echo "Valores nulos!";
}else{
    $ra = $_POST["ra"];
    $nome = $_POST["nome"];
    $curso = $_POST["curso"];

    echo "RA: ".$ra;
    echo "<br>";

    echo "Nome: ".$nome;
    echo "<br>";

    echo "Curso: ".$curso;
    echo "<br>";
}
