<?php

//Inclusions class//
// Dans le premier temps, nous allons inclure les fichiers de nos cloasse ici pour pouvoir les utiliser

require "registration.php";
require "login.php";
require "models/utilisateur.php";


$registration = [];

$json = fopen("user.json", "w");
fwrite($json, json_encode($registration));
fclose($json);

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
        $this->setid($nom);
        $this->setmdp($force);
        $this->setmail($mail);

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



//--------------------------------------------------------------------------------
// 2.Rooter
// Structure permetant d'appeler une action en fonction de la requête utilisteur



// Erreur Utilisateur
if(empty($_POST)) 
{
    $errors = array();

    if(empty($_POST['id'])) 
    {
        $errors['id'] = " Vous n'avez pas entrer l'identifiant";
    }

var_dump($errors);
}
 

// champ Identifiant


// Champs mot de passe


//--------------------------------------------------------------------------------
// 3. Fonctionnalités d'affichage :
// Actions déclenchées en fonction du choix de l'utilisateur
// 1. choix = 1 fonction avc deux "types" de fonctions, celles qui mèneront à un affichage, et celles qui seront redirigés (vers un choix conduisant à un affichage)

// Fonctionnalités d'affichage : 




//Fonctionnalité redirigées :




//--------------------------------------------------------------------------------
//.TEMPLATE
// Affichage du système de templates HTML

