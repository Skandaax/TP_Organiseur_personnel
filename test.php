<?php

// echo "ok";

// $text = "Bonjour et au revoir ! Je m'appelle John Doe, j'ai 27 ans, 
// j'habite en France et travaille depuis que j'ai 20 ans. 
// Ma passion : écrire des mots, mits, mets, mats, mat... 
// Pour me contacter, vous pouvez envoyer un email à contact@johndoe.fr
// ou contact@johndoe.com ou bien m'appeler au 06 07 08 09 10. 
// Vous pouvez aussi aller voir mon blog à l'adresse johndoe-blog.fr. "

// $tab = [];

//     var_dump(preg_match("#^bonjour|aurevoir$#", $text));
//     var_dump(preg_match_all("#[^oai]ts#", $text, $tab, ));
//     var_dump(preg_match-all("#[a-z]ts#", $text, $tab,));
//     var_dump(preg_match_all("#ma[a-z]{3,6}ts#", $text, $tab,));


// $numero = "0673970462";
// if (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $numero)) {
//     echo "Le numéro de téléphone entré est correct.";
//     // On peut ajouter le numéro à la base de donnée
// } else {
//     echo "Le numéro de téléphone entré est incorrect.";
//     // On ne peut pas ajouter le numéro à la base de donnée
// }


// $noms = ["Martin", "Bernard" ,"Thomas", "Petit" , "Robert", "Richard", "Durand", "Dubois", "Moreau", "Laurent,Simon",
// "Michel", "Lefebvre", "Leroy", "Roux", "David", "Bertrand", "Morel", "Fournier", "Girard", "Bonnet",
// "Dupont", "Lambert", "Fontaine", "Rousseau", "Vincent", "Artôt", "Désirée",
// "Boëllmann", "Léon", "Brégent", "Michel-Georges", "Compère", "Loyset", "Daniélou", 
// "Alain", "Delibes", "Léo", "Diémer", "Louis", "Dupré", "Marcel", 
// "Fauré", "Gabriel", "Françaix", "Jean", "Gaviniès", "Pierre",
// "Gédalge", "André", "Gutchë", "Gene"
// ];

// foreach($noms as $nom) {
//     if (preg_match(
//         '#^[a-zA-Z-àâäéèêëïîôöùûüçæœÆŒ
//         -ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿÇ()]*$#', $nom)) {
//         //on peut ajouter le nom à la base de données
//         echo "Le nom $nom est correct.<br>";
//     }else {
//         //on ne peut pas ajouter le nom à la base de données
//         echo "Le nom $nom est incorrect.<br>";
//     }
// }

//     var_dump($noms);

/*________________________Date__________________________________*/

// $now = date("d/m/Y");
// $date = date("D/W/L");
// $heure = date("h/i/s");
// $heure = date("h/i/s");
// $green = date("O/U/u/i");


// var_dump("$now");
// var_dump("$date");
// var_dump("$heure");
// var_dump("$green");

// // Affichage de quelque chose comme : 2000-07-01T00:00:00+00:00
// echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
// echo date(DATE_RFC2822);

// $today = date("Y-m-d H:i:s"); // 2001-03-10 17:16:18 (le format DATETIME de MySQL)

// $aujd = new DateTimeImmutable("now", new DateTimeZone("europe/Paris"));
// ​
// $annee_courante = $aujd->format("Y");
// $mois_courant = $aujd->format("m");
// $jour_courant = $aujd->format("d");
// ​
// echo "Nous sommes le $jour_courant/$mois_courant/$annee_courante";

// echo date('F j, Y', strtotime('le 1er jour de la semaine'));;

// public 'date' =>



$year = date("Y");
$monthname = date("m");
var_dump($year, $monthname);