<?php
    $msg = "";
    if(!isset($_COOKIE["InfoUser-username"])){
        $msg = "Usuário não está definido! Para ter acesso <a href='login.php'>Clique aqui!</a>";
        header('Location: erro.php?msg='  . $msg);
    }else{
        require('conteudo.php');
    }
