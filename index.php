<?php
session_start();
var_dump($_SESSION);

//---------------------------------------Cookie-----------------------------------
setcookie('id', 'mdp', time() + 182 * 24 * 60 * 60, '/');

//--------------------------------------------------------------------------------
// Création de fichiers

$json = fopen("data/user.json", "w");
fclose($json);

$file = fopen("html/home.php", "c");
$file = fopen("html/taches.php", "c");
$file = fopen("html/membre.php", "c");
$file = fopen("html/login.php", "c+");


//--------------------------------------------------------------------------------
//Inclusions class//
// 1.Dans le premier temps, nous allons inclure les fichiers de nos cloasse ici pour pouvoir les utiliser
require_once "models/utilisateur.php";

//--------------------------------------------------------------------------------
// 2.Rooter
// Structure permetant d'appeler une action en fonction de la requête utilisteur
$route = isset($_REQUEST["route"])? $_REQUEST["route"] : "home";

switch($route) {
    case "home" : $include = showHome();
        break;
    case "membre" : $include = showMembre();
        break;
    case "insert_user" : insertUser();
        break;
    case "connect_user" : connectUser();
        break;
    case "deconnect" : deconnectUser();
        break;
    case "login" : $include = showLogin();
        break;
    default : $nclude = showHome();
}

//--------------------------------------------------------------------------------
// 3. Fonctionnalités d'affichage :
// Actions déclenchées en fonction du choix de l'utilisateur
// 1. choix = 1 fonction avc deux "types" de fonctions, celles qui mèneront à un affichage, et celles qui seront redirigés (vers un choix conduisant à un affichage)

// Fonctionnalités d'affichage : 

function showHome() : string {
    if(isset($_SESSION["pseudo"])){
        header("location:index.php?route=membre");
    }
    return "home.php";
}

function showMembre() {
    return "membre.php";
}

function showLogin() {
    return "login.php";
}

//Fonctionnalité redirigées :
function insertUser() {

    // Traitement d'un nouvelle utilisateur

    if(!empty($_POST["pseudo"]) && !empty($_POST["email"]) && !empty($_POST["password"] === $_POST["password2"])) 
    {
        $user = new Utilisateur();
        $user->setPseudo($_POST["pseudo"]);
        $user->setPassword(password_hash($_POST["password"], PASSWORD_DEFAULT));
        $user->setPassword2(password_hash($_POST["password"], PASSWORD_DEFAULT));
        $user->setEmail($_POST["email"]);

        $user->save_User();
    }

    header('Location:index.php');
}

    // Connection d'un utilisateur
    function connectUser() {
    
    if(!empty($_POST["pseudo"]) && !empty($_POST["password"])) {
        $user = new Utilisateur();
        $user->setUtilisateur($_POST["idutilisateur"]);
        $new = $user->verifyUser()?? false;
        
        if($new) {
            if(password_verify($_POST["password"], $new->password)) {
                $_SESSION["pseudo"] = $new;
            }
        }
    }

     header('Location:index.php');
}

function deconnectUser() {
    unset($_SESSION["pseudo"]);
    header('Location:index.php');
}


//--------------------------------------------------------------------------------
//.TEMPLATE
// Affichage du système de templates HTML
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Ma TODO-LIST</title>
</head>
<body>

        <!-- Inclusion sous templates -->

    <?php require "html/$include" ?>

</body>
</html>