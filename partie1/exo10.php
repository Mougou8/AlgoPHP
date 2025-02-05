<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour un achat, écrire <br>
    l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre <br>
    de billets de 10 € et 5 €, de pièces de 2 e et 1 €.<br>

    AFFICHAGE :<br>;

    Montant à payer : 152 €<br>;
    Montant versé : 200 €<br>;
    Reste à payer : 48 €<br>

    Rendu monnaie:<br>
    4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €


</p>

<h2>Resultat</h2>

<?php

$montant_payer = 152;
$montant_versé = 200;
$reste_a_payer = $montant_versé - $montant_payer;
$nb10 = 0;
$nb5 = 0;
$nb2 = 0; 
$reste = 0; 

 
 
while($reste_a_payer > 10){
 
    $nb10 ++;
    $reste_a_payer = $reste_a_payer - 10;
}
if($reste_a_payer > 5){
    $nb5 ++;
    $reste_a_payer = $reste_a_payer - 5;
}

while($reste_a_payer > 2){
    $nb2 ++;
    $reste_a_payer = $reste_a_payer - 2;
} 

echo "Le total du reste à payer = $reste_a_payer<br>";


echo "$nb10 billets de 10 € - "." "."$nb5 billet de 5 € - "." "."$nb2 pièce de 2 € - ".""."$reste_a_payer pièce de 1 €";


