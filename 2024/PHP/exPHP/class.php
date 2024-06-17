<?php
    
    if(!isset($_COOKIE['class'])){
        header("Location: index.php");
        $turmas = "";
        $existe = false;
    }else{
        $existe = false;
        $class = $_COOKIE['class'];
        $turmas = array(
            "INFD3"=>array(
                "16117"=>"Amanda Oliveira Santos",
                "16557"=>"Bruno Penteado Carrara",
                "16563"=>"Cibele Souza de Almeida",
                "16119"=>"Danilo Rafhael",
                "16121"=>"Érika Cavalcanti"
                ),
            "CTI2"=>array(
                "17427"=>"Diogo Vinicius Oliveira",
                "17428"=>"Douglas José Figueiredo",
                "17429"=>"Emily Da Silva Farias"
                ),
            "INFN3"=>array(
                "16227"=>"Andre Ricardo Martins",
                "16573"=>"Andre Schinor Mena Peres",
                "16228"=>"Beatriz Santos de Mello",
                "16229"=>"Caio Ramos Ballarin",
                "16231"=>"Carlos Eduardo Lima"
                )
        );
        if(array_key_exists($class, $turmas)){
            $existe = true; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alunos</title>
</head>
<body>
    <div class="wrapper" style="text-align: center;">  
        <a href="index.php" class="voltar">Voltar</a> 
        <h2>Lista de Alunos</h2>
        <h3>Turma <?=$class?></h3>
        <?php
            if($existe){
                foreach($turmas[$class] as $matricula=>$nome){
        ?>
                <p class="linha"><?=$matricula?>: <?=$nome?></p>
        <?php
                }
            }else{
        ?>
            <p class="no_exists">Sala não existe!</p>
        <?php
            }
        ?>
  </div>
</body>
</html>