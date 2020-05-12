<?php

//---Défini les actions de l'utilisateur-------------------------------------------------
class taches extends dbconnect() {

    private $idtaches;
    private $description
    private $deadline
    private $idUtilisateur

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

//---Template HTML-----------------------------------
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