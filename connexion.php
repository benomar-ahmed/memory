<?php

session_start();
require 'Classes/User.php';


if(isset($_POST['submit'])){

    $login = $_POST['login'];
    $password = $_POST['password'];
    $newcard = new User();
    $newcard->connect($login,$password);
    $var_return = $newcard->connect($login,$password);;

    foreach($var_return as $message){
        echo $message;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <main>
        <form action="" method="post">

            <label for="login">Login :</label>
            <input type="text" name="login" id="">

            <label for="password">Password :</label>
            <input type="password" name="password" id="">

            <input type="submit" value="Se connecter" name="submit">

        </form>

        
    </main>
</body>
</html>