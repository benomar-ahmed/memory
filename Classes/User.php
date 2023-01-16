<?php


class User {

    private $id;
    public $login;
    public $password;
    public $pdo;
    public $msg_error;



    // CONSTRUCTEUR
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=memory;charset=utf8','root','');
    }


    // MÉTHODES


    // Methode pour créer un utilisateur
    public function register($login,$password)
    {
        $this->login = $login;
        $this->password = $password;

        $requete = $this->pdo->prepare("SELECT login froms user WHERE login=:login");
        $requete->execute(array('login'=>$login));
        $row = $requete->fetchAll(PDO::FETCH_ASSOC);

        if($row == true){  
            echo "L'utilisateur existe déjà";
        }

        else {
            $sql = $this->pdo->prepare("INSERT INTO utilisateurs (`login`,`password`) VALUES (?,?)");
            $sql->execute(array('$login','$password'));
            header('Location: connexion.php');
        }
    }




    //Methode pour se connecter
    public function connect($login,$password)
    {
        $this->msg_error = [];
        $this->login = $login;
        $this->password = $password;
        

        $requete = $this->pdo->prepare("SELECT id,login,password FROM utilisateurs WHERE login=:login and password=:password");
        $requete->execute(array(':login' => $login,':password' => $password));
        $row = $requete->fetchall(PDO::FETCH_ASSOC);
        

        if($row == true) {
            $_SESSION['id'] = $row[0]['id'];
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            $msg_error[]="Bonjour ".$_SESSION['login'];
        }
        
    
        else {
            $msg_error[]="Le login et/ou le mot de passe est incorrect !";
        }
        return $msg_error;
    }

    //  Méthode pour se déconnecter
    public function disconnect()
    {
        session_destroy();
        header("Location: connexion.php");
    }


}
?>