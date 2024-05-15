<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        a{
            color: blue;
        }
        a:visited{
            color: blue;
        }
        .header{
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="header">
        <p><span style="font-weight: bold;">Usuário: </span> <?=$_COOKIE["InfoUser-username"]?></p>
        <p><a href="remove.php">logout</a></p>
    </div>
    <hr>
    <p>Seja bem vindo ao sistema adm.</p>
    <hr>
    <p style="text-align: center;">Cotil - Unicamp</p>
</body>
</html>