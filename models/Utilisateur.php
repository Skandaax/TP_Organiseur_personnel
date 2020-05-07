<?php

//-----Définit un cookie qui sera envoyé avec le reste des en-têtes HTTP----------------
setcookie('save', 'black', time() + 182 * 24 * 60 * 60, '/');

//-----------------------------Défini les actions de l'utilisateur----------------------
class Utilisateur extends DbConnect{
    private $idutilisateur;
    private $pseudo;
    private $email;
    private $password;

    function __construct($id = null) {
        parent::__construct($id);
    }

    function setIdUtilisateur(int $id) {
        $this->idutilisateur = $id;
    }
    
    function getIdUtilisateur() : int {
        return $this->idutilisateur;
    }
    
    function setPseudo(string $Pseudo){
        $this->setPseudo = $pseudo;
    }
    
    function getpseudo() : string {
        return $this->setPseudo;
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


    //---------------------------------Sauvegarde de l'utilisateur---------------------------------
    function save_User() {        
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

//--------------------Extension de la base de donnée dbconnect------------------

    //----------------sélection de toutes les données d'une table---------------
    function selectAll(){
        $query = "SELECT * FROM utilisateur;";
        $result = $this->pdo->prepare($query);
        $result->execute();
        $datas = $result->fetchAll();

        $tab = [];

        foreach ($datas as $data) {
            $current = new Utilisateur();
            $current->setId($data['id_Utilisateur'];
            
            //Appel aux autres setters
            array_push($tab, $current);
        }
        return $tab;
    }
    //-------------sélection d'une ligne dans la table (selon son ID)------------
    function select() {
        $querry ="SELECT * FROM utilisateur WHERE id_utilisateur = $this->id;";
        $result = $this->pdo->prepare($query);
        $result->execute();
        $data = $result->fetch();

        return $this;
    }

    //-Permet d'insérer une nouvelle ligne de données dans une table-------------
    function insert() {
        $query = "INSERT INTO utilisateur(id_utilisateur,identifiant,email,Password) VALUES ('$this->id_utilisateur','$this->identifiant','$this->email','$this->password')";

        $result = $this->pdo->prepare($query);
        $result->execute();

        $this->id = $this->pdo->lastInsertID();
        return $this;
    }

    //------------------------------Mettre à jour un élément de la table---------
    function update(){

    }

    //------------------------------Supprimer une ligne de la table---------------
    function delete() {
    //     $servername = "localhost";
    //     $identifiant = "root";
    //     $password = "";
    //     $dbname = "todolist";

    //     //Création d'une connection-----------------------------------------------------
    //     $connection = mysqli($servername, $identifiant, $password, $dbname);

    //     //Vérification de la connection-------------------------------------------------
    //      if (!$connection) {
    //          die("Erreur de connection" .mysql_connect_error());

    //      //Suppression d'un enregistrent-------------------------------------------------
    //      $sql = "DELETE FROM utilisateur WHERE id=1"; }
    //      if ($connection->query($sql) === TRUE) {
    //          echo "Enregistrement supprimer avec succés";
    //      } else {
    //          echo "Erreur lors de la suppression de l'enregistrement: " . $connection->error;
    //      }
        
    //      $connection->close();
    }

}

    