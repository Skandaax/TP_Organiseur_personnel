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

    Private $monthmai;

    function setMonthMai(string $monthmai) {
        $this->setMonthMai = $month;
    }

    function getMonthMai() : string {
        return $this->monthmai
    }


    $mois_courrant = date("m");

    var_dump($may);
    

    

}
