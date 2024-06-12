<?php
    $array = array(
        "ra" => 18101,
        "serie" => 3,
        "aluno" => array(
            "nome" => "Marcos Antonio",
            "sobrenome" => "Mesquita Jr."
        )
    );

    echo "RA: " . $array["ra"] . "<br>";
    echo "Série: " . $array["serie"] . "<br>";
    echo "Nome: " . $array["aluno"]["nome"] . "<br>";
    echo "Sobrenome: " . $array["aluno"]["sobrenome"] . "<br>";
?>