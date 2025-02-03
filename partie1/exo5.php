<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs 
    et qui la convertit en euros.
    Attention, la valeur généréé devra être arrondie à 
    2 décimales.
    
</p>

<h2>Résultat</h2>

<?php

function convertirFrancsEnEuros($valeurFrancs){
    $tauxConversion = 6.55957;
    $valeurEuros = $valeurFrancs / 
    $tauxConversion;
    return round($valeurEuros, 2);
}

$valeurFrancs =100;
$valeurEuros = convertirFrancsEnEuros($valeurFrancs);

echo "$valeurFrancs francs = $valeurEuros euros<br>";

//  echo "la valeur en francs convertit en euros et le résultat arrondi
// à 2 décimales.<br>";

