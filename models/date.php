<?php


// class Date {

//     var $days = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
//     var $months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Noembre','Décembre');

//     function getAll($year) {
//         $r = array();
//         $date = strtotime($year.'-01-01');
//         while(date('y', $date) <= $year) {
//         //---Ce que je veux obtenir => $r[ANNEE][MOIS][JOUR] = jour de la semaine
//         $y = date('y',$date);
//         $m = date('n',$date);
//         $d = date('j',$date);
//         $w = str_replace('0','7',date('w',$date));
//         $r[$y][$m][$d] = $w;
//         $date = strtotime(date('Y-m-d', $date).' +1 DAY');

//         }
//         return $r;
//     }
    
// }

class Month {

    Private $monthname;
    Private $year;

//---Get - Récupère la valeur d'une proprièté-----------------------------------------
//---Set - Permet d'iniialiser la valeur d'une propriété------------------------------
    function setMonthName(string $monthname) {
        $this->setMonthName = $Name;
    }

    function getMontName() : string {
        return $this->monthName;
    }

    function setYear(string $year) {
        $this->setYear = $year;
    }

    function getMonthMai() : string {
        return $this->Year;
    }

//---Constructeur de la classe qui appelle cette méthode-----------------------------
//---à chaque création d'une nouvelle instance de l'objet----------------------------
    Public function MonthName(int $num) {
        $fr_names = [1 => "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
            $this->MonthName;

    }



}
