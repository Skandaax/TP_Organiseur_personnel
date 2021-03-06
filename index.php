<?php

//---crée une session ou restaure celle trouvée sur le serveur,------------------- 
//---via l'identifiant de session passé dans une requête GET, 
//---POST ou par un cookie--------------------------------------------------------
session_start();
$_SESSION['login'] = 'Identifiant';
var_dump($_SESSION);

//---Définit un cookie qui sera envoyé avec le reste des en-têtes HTTP------------
setcookie('id', 'mdp', time() + 182 * 24 * 60 * 60, '/');

//---Chargement automatique des class---------------------------------------------
spl_autoload_register(function ($class) {
    if(file_exists("models/$class.php")) {
        require_once "models/$class.php";
    }
});

//--------------------------------------------------------------------------------
// Création de fichiers

// $json = fopen("data/user.json", "w");
// fclose($json);

// $file = fopen("html/home.php", "c");
// $file = fopen("models/taches.php", "c");
// $file = fopen("html/membre.php", "c");
// $file = fopen("html/login.php", "c+");

//--------------------------------------------------------------------------------
//Inclusions class//
// 1.Dans le premier temps, nous allons inclure les fichiers de nos cloasse ici pour pouvoir les utiliser
require "conf/global.php";

//--------------------------------------------------------------------------------
// 2.Rooter
//---Structure permetant d'appeler une action en fonction de la requête utilisteur
$route = isset($_REQUEST["route"])? $_REQUEST["route"] : "home";

switch($route) {
    case "home" : $view = showHome();
        break;
    case "insert_user" : insertUser();
        break;
    case "connect_user" : showMembre();
        break;
    case "deconnect" : deconnectUser();
        break;
    case "login" : $view = showLogin();
        break;
        case "taches" : insert_taches();
        break;
    default : $view = showHome();
}

//--------------------------------------------------------------------------------
// 3. Fonctionnalités d'affichage :
// Actions déclenchées en fonction du choix de l'utilisateur
// 1. choix = 1 fonction avc deux "types" de fonctions, celles qui mèneront à un affichage, et celles qui seront redirigés (vers un choix conduisant à un affichage)

// Fonctionnalités d'affichage : 

function showHome() : string {
    if(isset($_SESSION["identifiant"])){
        header("location:index.php?route=membre");
    }
    return "home.php";
}

function showMembre() {
    $user = new Utilisateur();
    $user->selectAll();
    return "membre.php";
}

function showLogin() {
    return "login.php";
}

function insert_taches() {
    return "taches.php";
}

function showCalendar() {
    ​
        $aujd = new DateTimeImmutable("now", new DateTimeZone("europe/Paris"));
        $annee_courante = $aujd->format("Y");
        $mois_courant = $aujd->format("m");
        $month = new Month($mois_courant, $annee_courante);
    ​
        $datas = [
            "mois" => $month->getMonthName(),
            "annee" => $month->getYear()
        ];
        return ["template" => "calendrier.php", "datas" => $datas];
    }

//Fonctionnalité redirigées :
function insertUser() {

    //---Traitement d'un nouvelle utilisateur---

//      if(!empty($_POST["pseudo"]) && !empty($_POST["email"]) && !empty($_POST["password"] === $_POST["password2"])) 
//      {

//         if (preg_match('#^[a-zA-Z-àâäéèêëïîôöùûüçæœÆŒ-ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿÇ()]*$#', $_POST["PSEUDO"])) {

//             $user = new Utilisateur();
//             $user->setPassword($_POST["pseudo"]);
//             $user->setPassword(password_hash($_POST["password"], PASSWORD_DEFAULT));
//             $user->setPassword2(password_hash($_POST["password"], PASSWORD_DEFAULT));
//             $user->setEmail($_POST["email"]);

//             $user->Insert();

//             $_SESSION['pseudo'] = $pseudo;
//             $_SESSION['password'] = $password;

//             echo "Le pseudo est correct";
//         }else {
//             //on ne peut pas ajouter le nom à la base de données
//             echo "Le pseudo n'est pas correct";
//         }
//         // $user->save_User();

//      header('Location:index.php');
//  }

if(!empty($_POST["pseudo"]) && !empty($_POST["email"]) && !empty($_POST["password"] === $_POST["password2"])) 
     {
         $user = new Utilisateur();
         $user->setPassword($_POST["pseudo"]);
         $user->setPassword(password_hash($_POST["password"], PASSWORD_DEFAULT));
         $user->setPassword2(password_hash($_POST["password"], PASSWORD_DEFAULT));
         $user->setEmail($_POST["email"]);

        // $user->save_User();
     }

     header('Location:index.php');
 }


    //---Connection d'un utilisateur---
    function connectUser() {
    
    if(!empty($_POST["pseudo"]) && !empty($_POST["password"])) {
        $user = new Utilisateur();
        $user->setUtilisateur($_POST["id_utilisateur"]);
        $new = $user->verifyUser()?? false;
        
        if($new) {
            if(password_verify($_POST["password"], $new->password)) {
                $_SESSION["pseudo"] = $new;
            }
        }
    }

     header('Location:index.php');
}

//---Déconnection de l'utilisateur-----------------------------------------------
    function deconnectUser() {
        unset($_SESSION["utilisateur"]);
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

        <!---Inclusion sous templates--->

        <?php require "models/{$view['template']}"; ?>

</body>
</html>v