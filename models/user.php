<?php

//---------------------------------------Cookie-----------------------------------
setcookie('save', 'black', time() + 182 * 24 * 60 * 60, '/');

//---------------------------------------Class------------------------------------
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
    function save_user() 
    {        
        $registration = file_get_contents("user.json");
        $tab = json_decode($registration);
        array_push($tab,["id"=>sizeof($tab)+1, "id"=> $this->id, "mdp"=> $this->Mdp]);
        file_put_contents("user.json", json_encode($tab));
    }
}
    

    