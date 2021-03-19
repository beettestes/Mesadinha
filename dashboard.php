<?php

require_once "Classes/Usuario.php";

$usuario = new Usuario();

if (isset($_POST["log-in"]))
{
    $usuario->entrar();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Mesadinha</title>
        <link href="bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap-4.5.3-dist/js/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="style.css" rel="stylesheet">
    </head>

    <body class="bg-dark">
        <nav>

        </nav>
    </body>

    <script type="text/javascript" src="script.js"></script>
</html>
