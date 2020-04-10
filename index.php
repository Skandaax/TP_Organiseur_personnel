<?php

//Inclusions class//
// Dans le premier temps, nous allons inclure les fichiers de nos cloasse ici pour pouvoir les utiliser

require "accueil.php";

require "models/utilisateur.php";


$registration = [];

$json = fopen("user.json", "w");
fwrite($json, json_encode($registration));
fclose($json);

var_dump($json);

$file = fopen("models/utilisateur.php", "c");

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
        echo "l'identifian est sauvegarder";
    }
}

$id = new User ("" , "");
$id->user();

// 2.Rooter
// Structure permetant d'appeler une action en fonction de la requ^te utilisteur




//3. Fonctionnalités d'affichage :




//Foction redirigées :