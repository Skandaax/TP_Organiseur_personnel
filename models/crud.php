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

//---------------------------------------Interface Crud------------------------------------
interface Crud {

    //---------------------------------------Select all------------------------------------
    function selectAll(){
        $query = "SELECT * FROM utilisateur;"
        $result = $this->pdo->prepare($query);
        $result->execute();

        $tab = [];

        foreach($datas as $data) {
            $current  new taches();
            $current->setID($data['id_utilisateur'];
            
            array_push($tab, $current));
        }
        return $tab
    }

    //---------------------------------------Select------------------------------------
    function select() {
        $querry ="SELECT * FROM utilisateur WHERE id_utilisateur = $this->id;";
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

    //---------------------------------------Update------------------------------------
    function update() {

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