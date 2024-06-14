<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $class = "";
        setcookie("class", 0, time()-3600, "/");
    }else if($_SERVER["REQUEST_METHOD"] == "POST"){
        $class = $_POST["class"];
        $class = strtoupper($class);
        setcookie("class", $class, time()+3600, "/");
        header("Location: class.php");
    }
    $turmas = array(
        '3DSD' => array(
            "16117" => "Amanda Oliveira Santos",
            ""
            )

        );
    //$meuArray = array("X" => 'Maça', "Y"=> "Melão", "Tres" => "Uva");
    //$melao = array_search("Y", $meuArray);
   // array_key_exists("Y", $meuArray);
    //array_key();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Dan Aleko</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form method="POST">
      <h1>Buscar Alunos</h1>
      <div class="input-box">
        <input type="text" placeholder="Sigla da Sala" name="class" required>
        <i class='bx bxs-group'></i>
      </div>
      <button type="submit" class="btn">Buscar</button>
    </form>
  </div>
</body>
</html>