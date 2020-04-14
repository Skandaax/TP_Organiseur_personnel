<?php

class Utilisateur
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

    function  sauveruser()
    {
        $this->sauveruser;
    }
}