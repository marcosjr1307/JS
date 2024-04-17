<?php
    if(!isset($_COOKIE["InfoUser-Nome"])){
        $msg = "Você não está cadastrado em nosso site! Para ter acesso: <a href='cadastro.php'> Clique aqui! </a>";
    }else{
        $nome = $_COOKIE["InfoUser-Nome"];
        $idade = $_COOKIE["InfoUser-Idade"];
        $contaVisitas = $_COOKIE["InforUser-contaVisitas"];

        if($idade < 18){
            $msg = "Você não tem idade para acessar esse site!";
        }else{
            $cor = $_COOKIE["InfoUser-Cor"];
        }
    }
?>