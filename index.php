<?php

//Inclusions class//
// Dans le premier temps, nous allons inclure les fichiers de nos cloasse ici pour pouvoir les utiliser

require "registration.php";
require "login.php";
require "models/utilisateur.php";


$registration = array();
$registration["utilisateur"] = "id";
$registration["mail"] = "email";
$registration["mot de passe"] = "mdp";
$json = fopen("user.json", "w");
fwrite($json, json_encode($registration));
fclose($json);

echo json_encode($registration);

var_dump($json);

$file = fopen("home.php", "c");
$file = fopen("models/utilisateur.php", "c");
$file = fopen("login.php", "c");
$file = fopen("function.php","c");

class Users
{
    protected $id;
    protected $mdp;
    protected $email;

    function __construct(string $id, string $mdp, string $email)
    {
        $this->setid($id);
        $this->setmdp($mdp);
        $this->setmail($email);

    }

    function registration()  
    {
        echo $this->id ." ". $this->mdp." "."<br>";
    }

    function setuser()
    {
        $this->id = $POST["Identifiant"];
    }

    function getuser() : string 
    {
        return $this->id;
    }

    function setmail()
    {
        $this->mail = $POST["Email"];
    }

    function getmail() : string 
    {
        return $this->mail;
    }

    function setpassword()
    {
        $this->mdp = $POST["Password"];
    }

    function getpassword() : string 
    {
        return $this->mdp;
    }

    function  saveuser()
    {
        echo "l'identifiant est sauvegarder";
    }
}

$utilisateur = new User;
$utilisateur->insertUser();


//--------------------------------------------------------------------------------
// 2.Rooter
// Structure permetant d'appeler une action en fonction de la requête utilisteur

$router = isset($_POST["router"])? $_POST["router"] : "home";

switch($router) {
    case "home" : header('locaton: home.php');
    echo "Diriger vers la page d'accueil";
        break;
    case "insert_user" : header('locaton: models/utilisateur.php');
    echo "ajout d'un utilisateur";
        break;
    default : "home";
    echo "Page d'accueil par defaut";
}

//--------------------------------------------------------------------------------
// 3. Fonctionnalités d'affichage :
// Actions déclenchées en fonction du choix de l'utilisateur
// 1. choix = 1 fonction avc deux "types" de fonctions, celles qui mèneront à un affichage, et celles qui seront redirigés (vers un choix conduisant à un affichage)

// Fonctionnalités d'affichage : 

function Home() : string {
    return "home.php";
}

//Fonctionnalité redirigées :



//--------------------------------------------------------------------------------
//.TEMPLATE
// Affichage du système de templates HTML

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma TODO-LIST</title>
</head>
<body>

 <?php require "home.php" ?>

</body>
</html>