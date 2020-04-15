<?php

//---------------------------------------Cookie-----------------------------------
setcookie('save', 'black', time() + 182 * 24 * 60 * 60, '/');

//--------------------------------------------------------------------------------

//--------------------------------------------------------------------------------
// Création de fichiers
$registration = array();
$registration["utilisateur"] = "id";
$registration["mail"] = "email";
$registration["mot de passe"] = "mdp";
$registration = file_get_contents("user.json");
$json = fopen("user.json", "w");
fwrite($json, json_encode($registration));
fclose($json);

echo json_encode($registration);

var_dump($json);

$file = fopen("home.php", "c");
$file = fopen("models/utilisateur.php", "c");
$file = fopen("login.php", "c");
$file = fopen("function.php","c");
$file = fopen("taches.php", "c");


//Inclusions class//
// 1.Dans le premier temps, nous allons inclure les fichiers de nos cloasse ici pour pouvoir les utiliser
require "models/utilisateur.php";

//--------------------------------------------------------------------------------
// 2.Rooter
// Structure permetant d'appeler une action en fonction de la requête utilisteur
$route = isset($_POST["route"])? $_POST["route"] : "home";

switch($route) {
    case "home" : $include = "registration.php";
        break;
    case "insert_user" : insert_user();
        break;
    default : $nclude = "registration.php";
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
function insertUser() {
    $utilisateur = new Users("","");
    $utilisateur->setPseudo($_POST["id"]);
    $utilisateur->setMp($_POST["mdp"]);
    $utilisateur->save_user();
    header('Location: index.php?route=home');
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
    <title>Ma TODO-LIST</title>
</head>
<body>

 <?php require $include ?>

</body>
</html>