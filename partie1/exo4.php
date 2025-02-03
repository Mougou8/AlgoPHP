<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir
si une phrase est palindrome.
</p>
<h2>Résultat</h2>

<?php



$phrase = "Engage le jeu que je le gagne";

$lower = strtolower ($phrase);
// var_dump($lower);
$lowerSansEspace = str_replace(' ',"",$lower);
// var_dump($lowerSansEspace);

$reverse = strrev($lowerSansEspace);


if ( $lowerSansEspace == $reverse){
    echo "la phrase est palindrome";

}else {

  echo "La phrase n'est pas palindrome<br>";
}


