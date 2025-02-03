<h1>Exercice 3</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction 
    permettant de remplacer le mot "aujourd'hui" par le mot 
    "demain". Afficher l'ancienne et nouvelle réponse.
</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";

$phrase_modifie = str_replace("aujourd'hui" , "demain", $phrase );

echo "La phrase d'origine : ".$phrase."<br>";
echo "La phrase modifiée : " .$phrase_modifie;
