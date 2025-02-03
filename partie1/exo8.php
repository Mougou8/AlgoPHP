<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication 
    d'un nombre passé en paramètre sous la forme :<br>; 
        AFFICHAGE( pour la table de 8) :<br>;

        Table de 8 :<br>;
        1 x 8 = 8 <br>;
        2 x 8 = 16 <br>;
        3 x 8 = 24 <br>
</p>

<h3>Resultat</h3>

<?php

$nombre = 8;

for ($i = 1; $i <= 10; $i++) {
    echo  "8 x $i = " . (8 * $i) ."<br>";
}
