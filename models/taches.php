<?php

//---Défini les actions des taches-------------------------------------------------
class Taches  {

    private $idtaches;
    private $description;
    private $deadline;
    private $idUtilisateur;

    //---Get - Récupère la valeur d'une proprièté-----------------------------------------
    //---Set - Permet d'iniialiser la valeur d'une propriété------------------------------
    function getIdtaches(): int {
        return $this->idtaches;
    }

    function getDescription(): string {
        return $this->description;
    }

    function deadline(): DataTime {
        return $this->deadline;
    }

    function getIdUtilisateur(): int {
        return $this->idUtilisateur;
    }

    function setIdtaches(int $id){
        $this->idtaches = $id;
    }

    function setDescription(string $desc){
        $this->description = $desc;
    }

    function setDeadline(DateTime $dd){
        $this->idtaches = $dd;
    }

    function setIdUtilisateur(int $id){
        $this->idUtilisateur = $id;
    }

//---Extension de la base de donnée dbconnect-----------------------------------

    //---sélection de toutes les données d'une table----------------------------
    function selectAll(){

    }
    //---sélection d'une ligne dans la table (selon son ID)----------------------
    function select() {

    }

    //---Permet d'insérer une nouvelle ligne de données dans une table-----------
    function insert() {

    }

    //---Mettre à jour un élément de la table------------------------------------
    function update(){

    }

    //---Supprimer une ligne de la table-----------------------------------------
    function delete() {

    }

}

//--------------------------------------------------------------------------------
//---TEMPLATE
//---Affichage du système de templates HTML
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/calendar.css">
    <title>Ma TODO-LIST</title>
</head>
<body>

 <h1>a TOTO LIST</h1>

    <?php
        require "../models/date.php";
        $date = new Date();
        $year = date('Y');
        $dates = $date->getAll($year);
    ?>
    <div class="period">
        <div class="year"></div><?php echo $year; ?></div>
        <div class="months">
            <ul>
                <?php foreach($date->months as $id=>$m): ?>
                    <li><a href="#" id="linkMonth"><?php echo $id+1;?> <?php utf8_encode(substr(utf8_decode($m),0,3)); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php $dates = current($dates);?>
    </div>

    <pre><?PHP print_r($dates); ?></pre>
</body>
</html>