<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction 
    de son âge:<br>;
    . Poussin: entre 6 et 7ans<br>;
    . Pupille : entre 8 et 9 ans <br>;
    . Minime : 10 et 11 ans <br>;
    . Cadet : à patir de 12 ans <br>;
    . Si la catégorie n' est pas gérée, merci de le préciser.<br>;
    AFFICHAGE :<br>;
    L' enfant qui a 10 ans appartient à , la catégorie "Minime"
</p>

<h3>Résultat</h3>

<?php

  $age  = 52;
if($age < 6 ) {
    $resultat = "non pris compte";
}elseif ($age < 8 ) {
    $resultat = "Poussin";
}elseif ($age < 10 )  {
    $resultat = "Pupiile";
}elseif ($age < 12 ) {
    $resultat = "Minime";
} else {
    $resultat = "Cadet.<br>";
}
echo "l'enfant qui a $age ans est: $resultat <br>";


