<h1>Exercice 2</h1>


<p>Soit A partir de la phrase de l'exercice 1, écrire l' instruction 
    permettant de compter le nombre des mots contenus dans celle-ci.
</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";

$nbMots = str_word_count($phrase);

echo "La phrase contient $nbMots mots<br>";