<?php

//---------------------------------------Cookie-----------------------------------
setcookie('save', 'black', time() + 182 * 24 * 60 * 60, '/');

//---------------------------------------Class------------------------------------
class User
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
    
    function setUser()
    {
        $this->nom = $POST["Identifiant"];
    }
    
    function getUser() : string 
    {
        return $this->id;
    }
    
    function setMail()
    {
        $this->mail = $POST["Email"];
    }
    
    function getMail() : string 
    {
        return $this->mail;
    }
    
    function setpPssword()
    {
        $this->mdp = $POST["Password"];
    }
    
    function getPassword() : string 
    {
        return $this->mdp;
    }
    function save_User() 
    {        
        $tab = json_decode(file_get_contents("data/user.json"));

        $unique = true;
        foreach($tab as $element) 
        {
            if($element->id == $this->id) {
                $unique = false;
            }
        }

        $registration = array();
        $registration["utilisateur"] = sizeof($tab) + 1;
        $registration["mail"] = $this->mail;
        $registration["mot de passe"] = $this->mdp;

        if($unique) {
            array_push($tab, $registration);
            $registration_json = json_encode($registration);
            file_put_contents("data/user.json", $registration);
        }
        var_dump($registration_json);
    }
}
    

    