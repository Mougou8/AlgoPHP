<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un 
    montant de facture à régler à partir de la qualité 
    d'articles, son prix hors taxe et un taux de TVA
    (exprimé en décimal.Ex : écrire20 % ->0.2) 
</p>

<h3>Résultat</h3>

<?php

 $prixHT = (float)"9.99";
 $nbArticles = (int) "5";
 $totalHT = $prixHT * $nbArticles;
 echo "Le total HT est egal de $totalHT <br>";

 $tauxTVA = 0.20;
 $totalTTC = $prixHT * $nbArticles + $prixHT * $nbArticles * $tauxTVA ;
 echo "Le total de TTC est de $totalTTC <br>";








//  $tauxTVA = $totalHT = "$prixHT * $nbArticles";

 
//  $totalTTC = "$prixHT * $nbArticles. * . 
//         $totalHT * $tauxTVA;


        


 