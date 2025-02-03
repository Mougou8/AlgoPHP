<h1>Exercice 4</h1>

<p>Ecrire</p>un algorithme permettant de savoir
si une phrase est palindrome.

<h2>Résultat</h2>

<?php

function estPalindrome($phrase) {
    // $phrase_nettoyee = pre_replace('/[^a-zA-Z0-9]/','',
    // strtolower($phrase));
    // return $phrase_nettoyee === strrev($phrase_nettoyee);
 }
    $phrase = "Engage le jeu que je le gagne";
  if (estPalindrome($phrase)) {
    echo "Oui, c'est palindrome<br>";
} else {
    echo "Non, ce n'est pas palindrome<br>";
}


