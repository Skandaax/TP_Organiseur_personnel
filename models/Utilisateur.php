<?php

//---------------------------------------Cookie-----------------------------------
setcookie('save', 'black', time() + 182 * 24 * 60 * 60, '/');

//---------------------------------------Utilisateur------------------------------------
class Utilisateur
    {
    protected $id_utilisateur;
    protected $email;
    protected $password;
    
    function __construct(string $id_utilisateur, string $password, string $email)
    {
        $this->setPseudo($id_utilisateur);
        $this->setPassword($password);
        $this->setEmail($email);
    
    }
    
    function registration()  
    {
        echo $this->id_utilisateur ." ". $this->password." ". $this->email." "."<br>";
    }
    
    function setUser()
    {
        $this->id_utilisateur = $POST["Utilisateur"];
    }
    
    function getUser() : string 
    {
        return $this->id_utilisateur;
    }
    
    function seteMail()
    {
        $this->email = $POST["email"];
    }
    
    function getMail() : string 
    {
        return $this->email;
    }
    
    function setpPassword()
    {
        $this->password = $POST["Password"];
    }
    
    function getPassword() : string 
    {
        return $this->password;
    }

 //---------------------------------Sauvegarde de l'utilisateur------------------------------------
    function save_User() 
    {        
    
        $tab = json_decode(file_get_contents("data/user.json"));

        $unique = true;
        foreach($tab as $element)
        {
            if($element->id_utilisateur == $this->id_utilisateur){
                $unique = false;
            }
        }

        $user = [
            "id_utilisateur" => sizeof($tab) + 1,
            "password" => $this->password,
            "email" => $this->email
        ];

        if($unique)
        {
            array_push($tab, $user);        
            $user_json = json_encode($tab);
            file_put_contents("data/user.json", $user_json);
            var_dump($user_json);
        }

   //---------------------------------Connection Utilisateur------------------------------------
} 