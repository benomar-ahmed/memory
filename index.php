<?php

require './Classes/Card.php';
include './fonctions/fonctions.php';

if(isset($_POST['submit']))
{
    $nombre_pair = $_POST['nombre_pair'];
    var_dump($nombre_pair);
}











?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <input type="text" name="nombre_pair" id="">
            <input type="submit" value="Choisir un nombre" name="submit">
        </form>
    </main>
</body>
</html>