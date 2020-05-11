<?php

//-----Définit un cookie qui sera envoyé avec le reste des en-têtes HTTP-----------------
setcookie('save', 'black', time() + 182 * 24 * 60 * 60, '/');

//---Défini les actions de l'utilisateur-------------------------------------------------
class Utilisateur extends DbConnect{
    private $idutilisateur;
    private $identifiant;
    private $nom;
    private $email;
    private $password;
    private $password2;

    //---Constructeur de la classe qui appelle cette méthode-----------------------------
    //---à chaque création d'une nouvelle instance de l'objet----------------------------

    function __construct($id = null) {
        parent::__construct($id);
    }

    //---Get - Récupère la valeur d'une proprièté-----------------------------------------
    //---Set - Permet d'iniialiser la valeur d'une propriété------------------------------
    function setIdUtilisateur(int $id) {
        $this->idutilisateur = $id;
    }
    
    function getIdUtilisateur() : int {
        return $this->idutilisateur;
    }
    
    function setIdentifiant(string $identifiant){
        $this->setidentifiant = $identifiant;
    }
    
    function getIdentifiant() : string {
        return $this->setIdentifiant;
    }

    function setEmail(string $email) {
        $this->email = $email;
    }
    
    function getEmail() : string {
        return $this->email;
    }
    
    function setPassword(string $password) {
        $this->password = $password;
    }
    
    function getPassword() : string {
        return $this->password;
    }

    function setPassword(string $password2) {
        $this->password2 = $password2;
    }
    
    function getPassword() : string {
        return $this->password2;
    }

    //---Sauvegarde de l'utilisateur sur un fichier json--------------------------
    function save_User() {        
        $tab = json_decode(file_get_contents("data/user.json"));

        $unique = true;
        foreach($tab as $element) {
            if($element->identifiant == $this->identifiant){
                $unique = false;
            }
        }

        $user = [
            "id_utilisateur" => sizeof($tab) + 1,
            "identifiant" => $this->identifiant,
            "password" => $this->password,
            "password2" => $this->password2,
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

    //---Veriffier l'existence de l'utilisateur dans le fichier json-------------
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

//---Extension de la base de donnée dbconnect-----------------------------------

    //---sélection de toutes les données d'une table----------------------------
    function selectAll(){
        $query = "SELECT * FROM utilisateur;";
        $result = $this->pdo->prepare($query);
        $result->execute();
        $datas = $result->fetchAll();

        $tab = [];

        foreach ($datas as $data) {
            $user = new utilisateur();
            $user->setIdUtilisateur($data['id_utilisateur']);
            $user->setIdentifiant($data['identifiant']);
            $user->setEmail($data['email']);
            $user->setPassword($data['Password']);

            //Appel aux autres setters
            array_push($tab, $user);
        }
        return $tab;
    }
    //---sélection d'une ligne dans la table (selon son ID)----------------------
    function select() {
        $querry ="SELECT * FROM utilisateur WHERE id_utilisateur = $this->id;";
        $result = $this->pdo->prepare($query);
        $result->execute();
        $data = $result->fetch();

        return $this;
    }

    //---Permet d'insérer une nouvelle ligne de données dans une table-----------
    function insert() {
        $query = "INSERT INTO utilisateur(id_utilisateur,identifiant,email,Password) 
                    VALUES (:identifiant, :email, :Password)";

        $result = $this->pdo->prepare($query);
        $result->bindValue(':identifiant', $this->identifiant, PDO::PARAM_STR);
        $result->bindValue(':email', $this->email, PDO::PARAM_STR);
        $result->bindValue(':Password', $this->password, PDO::PARAM_STR);
        $result->execute();

        $this->id = $this->pdo->lastInsertId();
        return $this;
    }

    //---Mettre à jour un élément de la table------------------------------------
    function update(){

    }

    //---Supprimer une ligne de la table-----------------------------------------
    function delete() {

    }

}

    