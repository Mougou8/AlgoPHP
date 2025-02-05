<h1>Exercici 11</h1>

<p>Initialiser un tableau de x marques de voirures. Ecrire un algorithme <br>
    permettant de parcourir ce tableau et d'en afficher le contenu <br>
    (une marque de voiture par ligne). Il est également demandé d'afficher<br>
     le nombre de marques présentes dans le tableau;<br>

     Exemple : tableau => "Peugeot", "Renault", "BMW", "Mercedes"<br>

     AFFICHAGE : (attention à utiliser une liste à puces)<br>

     il y a 4 marques de voitures dans le tableau :<br>
     Peugeot<br>
     Renault<br>
     BMW<br>
     Mercedes<br>

</p>

<h2>Resultat</h2>

<?php

// $tableau = array( "Peugeot", "Renault", "BMW", "Mercedes");
$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = count($marques);
// var_dump($nbMarques);
for($i = 0; $i < $nbMarques ; $i++) {
    
}
echo "<ul>";

foreach ($marques as $marque){
    echo "<li> $marque</li>";
    
}

echo "</ul>";
