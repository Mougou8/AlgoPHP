<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge 
    et de son sexe.<br>
    Si la personne est une femme dont l'âge est compris entre 18 et 35 ans<br>
    ou si c'est un homme de plus de 20 ans,alors celle-ci est imposable 
    (sinon ce n'est pas le cas, "non imposable").<br>;

    AFFICHAGE :<br>;

    Age : 32 <br>;
    Sexe : F <br>;
    La personne est imposable.

</p>

<?php

// Deux conditions : âge et sexe pour savoir "imposable ou non". 

$age = 32;
$sexe = "F";

if(($sexe == "F" && $age >= 18  && $age <= 35) || ($sexe == "H" && $age >  20)) {
     
    echo " La personne est imposable <br>";
} else {
    echo " La phrase est non imposable<br>";

       
}

