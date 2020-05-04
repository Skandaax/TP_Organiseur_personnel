<?php

//---------------------------------------Cookie-----------------------------------
setcookie('save', 'black', time() + 182 * 24 * 60 * 60, '/');

//---------------------------------------Utilisateur------------------------------------
class Utilisateur
    {
    protected $idutilisateur;
    protected $pseudo;
    protected $email;
    protected $password;
    
    function __construct() {
        $this->pdo = new PDO(<DATABASE>, <Login>, <PASSWORD>);
        $this->idutilisateur = $id
    }


    function setIdUtilisateur(int $id) 
    {
        $this->idutilisateur = $id;
    }
    
    function getIdUtilisateur() : int 
    {
        return $this->idutilisateur;
    }
    
    function setPseudo(string $Pseudo)
    {
        $this->setPseudo = $pseudo;
    }
    
    function getpseudo() : string 
    {
        return $this->setPseudo;
    }

    function setEmail(string $email)
    {
        $this->email = $email;
    }
    
    function getEmail() : string 
    {
        return $this->email;
    }
    
    function setPassword(string $password)
    {
        $this->password = $password;
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
        foreach($tab as $element) {
            if($element->pseudo == $this->pseudo){
                $unique = false;
            }
        }

        $user = [
            "id_utilisateur" => sizeof($tab) + 1,
            "pseudo" => $this->pseudo,
            "password" => $this->password,
            "password2" => $this->password,
            "email" => $this->email
        ];

        echo json_encode($tab);

        if($unique) {
            array_push($tab, $user);        
            $user_json = json_encode($tab);
            file_put_contents("data/user.json", $user_json);
            var_dump($user_json);
        }
    }

    // Veriffier l'existence de l'utilisateur dans le fichier json----------------------------------
    function verifyUser() {
        $tab = json_decode(file_get_contents("data/user.json"));

        foreach($tab as $user) {
            if($this->utilisateur == $user->utilisateur) {
            return $user;
            }else {
                header('Location: index.php?route=connect');
            }
        }
    }
}
