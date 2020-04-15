<?php

//---------------------------------------Cookie-----------------------------------
setcookie('save', 'black', time() + 182 * 24 * 60 * 60, '/');

//--------------------------------------------------------------------------------
// Création de fichiers
$json = fopen("data/user.json", "w");
fclose($json);

$file = fopen("html/home.php", "c");
$file = fopen("html/login.php", "c");
$file = fopen("function.php","c");
$file = fopen("taches.php", "c");

//Inclusions class//
// 1.Dans le premier temps, nous allons inclure les fichiers de nos cloasse ici pour pouvoir les utiliser
require "models/user.php";

//--------------------------------------------------------------------------------
// 2.Rooter
// Structure permetant d'appeler une action en fonction de la requête utilisteur
$route = isset($_POST["route"])? $_POST["route"] : "home";

switch($route) {
    case "home" : $include = showHome();
        break;
    case "insert_user" : insert_user();
        break;
    default : $nclude = showHome();
}

//--------------------------------------------------------------------------------
// 3. Fonctionnalités d'affichage :
// Actions déclenchées en fonction du choix de l'utilisateur
// 1. choix = 1 fonction avc deux "types" de fonctions, celles qui mèneront à un affichage, et celles qui seront redirigés (vers un choix conduisant à un affichage)

// Fonctionnalités d'affichage : 

function showHome() : string {
    return "html/home.php";
}

//Fonctionnalité redirigées :
function insertUser() {
    $utilisateur = new Users("","");
    $utilisateur->setid($_POST["id"]);
    $utilisateur->setMdp($_POST["mdp"]);

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