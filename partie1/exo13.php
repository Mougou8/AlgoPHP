<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées<br>
   dans un tableau (pas de coefficient ).  Elle devra être affichée avec 2 décimal.<br>
</p>

<h3>Resultat</h3><br>

AFFICHAGE :

Les notes  obtenues par l'élève sont : 10 12 8 19 3 16 11 13 9 <BR>
Sa moyenne généale est donc de : 11.22 <br>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
// array_sum = la somme du tableau
$sommeNotes = array_sum($notes);
// round c'est pour arrondir les chiffres décimaux, 
// à l'occurance ici 2 chiffres après la virgule
$moyenne = round($sommeNotes / $nbNotes , 2 );

echo "La moyenne générale est donc : $moyenne .<br>";