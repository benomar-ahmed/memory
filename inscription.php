<?php

require 'Classes/User.php';





if(isset($_POST['submit'])){

    $login =  $_POST['login'];
    $password = $_POST['password'];
    $verify = $_POST['verify-password'];


    if($password == $verify){
        $newcard = new User();
        $newcard->register($login,$password);
        $var_return = $newuser->register($login,$password);
        var_dump($var_return);

    }

    else {
        echo "Les mot de passe ne sont pas identiques !";
    }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

    <main>
        <form action="" method="post">

            <label for="login">Login :</label>
            <input type="text" name="login" id="" required="required">

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="" required="required">

            <label for="verify-passsword">Retapez votre mot de passe :</label>
            <input type="password" name="verify-password" required="required">

            <input type="submit" value="S'inscrire" name="submit">
        </form>

    </main>
</body>
</html>