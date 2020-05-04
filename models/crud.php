<?php


//---------------------------------------Class taches------------------------------------
class taches() {

    private $pdo;
    private $idtaches;

    function __construct($id = null) {
        $this->pdo = new pdo(<database>, <login>, <assword>);
        $this->id = $id;
    }

    function setIdtaches($id) {
        $this->idtaches = $id;
    }
}

//---------------------------------------Modèle Crud------------------------------------
class DbConnect {

    protected $pdo;
    protected $id;
    protected $password;

    function __construct($id = null) {
        $this->pdo = new pdo(DATABASE, LOGIN, PASSWORD);
        $this->idutilisateur = $id;
        $this->password = $password;
    }

    function setID($id) {
        $this->idutilisateur = $id;
    }

    function setPassword($password) {
        $this->password = $password;
    }
}

class utilisateur extends Dbconnect {
    function __construct($id = null) {
        parrent::__construct($id)
    }
}

//---------------------------------------Interface Crud------------------------------------
interface Crud {

    //---------------------------------------Select all------------------------------------
    function selectAll(){
        $query = "SELECT * FROM taches;"
        $result = $this->pdo->prepare($query);
        $result->execute();

        $tab = [];

        foreach($datas as $data) {
            $current  new taches();
            $current->setID($data['id_taches'];
            
            array_push($tab, $current));
        }
        return $tab
    }

    //---------------------------------------Select------------------------------------
    function select() {
        $querry ="SELECT * FROM taches WHERE id_taches = $this->id;";
        $result = $this->pdo->prepare($query);
        $result->execute();
        $data = $result->fetch();

        return $this;
    }

    //---------------------------------------Insert------------------------------------
    function insert() {
        $query = "INSERT INTO taches(nouvelle_taches,contact,id_utilisateur) VALUES ('$this->nouvelle_taches','$this->contact','$thisid_utilisateur')";

        $result = $this->pdo->prepare($query);
        $result->execute();

        $this->id = $this->pdo->lastInsertID();
        return $this
    }

    //---------------------------------------delete------------------------------------*
    $servername = "localhost";
    $identifiant = "root";
    $password = "";
    $dbname = "todolist"

    $connection = mysql_connect($servername, $identifiant, $password, $dbname);

    if (!$connection) {
        die("Erreur de connection" .mysql_connect_error());
        $sql = "DELETE FROM taches WHERE id=";
        $connection->exec($sql);
        echo "Suprimer avec succés";
    }
    catch(PDOExeption $e) {
        echo $sql . "<br>". $e->getmessage();
    }

    $connection = null;

}