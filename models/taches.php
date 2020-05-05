<?php

//---------------------------------------Gestion des tâches------------------------------------
abstract class taches() {

    private $pdo;
    private $id_taches;

    function __construct($id) {
        $this->pdo = new pdo(<database>, <login>, <assword>);
        $this->id = $id;
    }

    function getIdtaches($id) {
        $this->id_taches = $id;
    }

}

//---------------------------------------l'extension du Gestionnaire  des tâches----------------
class taches extends dbconnect {
    function __construct($id) {
        parrent::__construct($id);
    }

    //---------------------------------------Select all------------------------------------------
    function selectAll(){
        $query = "SELECT * FROM taches;";
        $result = $this->pdo->prepare($query);
        $result->execute();
        $datas = $result->fetchall();

        //$tab = [];

        //$current = new utilisateur();
        //$current->setId($data['id_utilisateur'];
            
            //array_push($tab, $current));
        //}
        //return $tab
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
        $query = "INSERT INTO utilisateur(id_utilisateur,identifiant,email,Password) VALUES ('$this->id_utilisateur','$this->identifiant','$this->email','$this->password')";

        $result = $this->pdo->prepare($query);
        $result->execute();

        $this->id = $this->pdo->lastInsertID();
        return $this;
    }

    //---------------------------------------Update------------------------------------
    //$servername = "localhost";
    //$identifiant = "root";
    //$password = "";
    //$dbname = "todolist"
    //}

    //---------------------------------------delete------------------------------------
    function delete() {
        $servername = "localhost";
        $identifiant = "root";
        $password = "";
        $dbname = "todolist";

        //Création d'une connection-----------------------------------------------------
        $connection = mysqli($servername, $identifiant, $password, $dbname);

        //Vérification de la connection-------------------------------------------------
        if (!$connection) {
            die("Erreur de connection" .mysql_connect_error());

        //Suppression d'un enregistrent-------------------------------------------------
        $sql = "DELETE FROM utilisateur WHERE id=1";
        }
        if ($connection->query($sql) === TRUE) {
            echo "Enregistrement supprimer avec succés";
        } else {
            echo "Erreur lors de la suppression de l'enregistrement: " . $connection->error;
        }
        
        $connection->close();
    }

//--------------------------------------Template HTML-----------------------------------
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma TODO-LIST</title>
</head>
<body>

 <h1>a TOTO LIST</h1>

 <p>
 Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro 
 succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi 
 pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque,
si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.
 </p>

</body>
</html>