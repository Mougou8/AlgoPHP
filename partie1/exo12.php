<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms<br>
    et de langue assossiée (tableau contenant clé et valeur), dire bonjour<br>
    aux différentes personnes dans leur langue respective (français =>"Salut",<br>
    anglais =>"Hello", espagnol =>"Hola")en utilisant un switch.<br>

    Exemple : tableau => Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG<br>

    AFFICHAGE : <br>

    Salut Mickaël<br>
    Hola Virgile<br>
    Hello Marie-Claire<br>

    Variante : trier d'abord le tableau par ordre alphabétique du prénom<br>

    AFFICHAGE :<br>

    Hello Marie-Claire<br>
    Salut Mickaël<br>
    Hola Virgile<br>
</p>

<?php

$prenoms = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
];
// var_dump($prenom);
$salutations = [
    "FRA" =>  "Salut",
    "ESP" =>  "Hola",
    "ENG" =>  "Hello",
    
];
      
 function salutations($prenom, $langue){

 
     switch ($langue ){
        case "FRA": echo "Bonjour .$prenom. !";
        break;
        case "ENG": echo "Hello .$prenom. !";
        break;
        case "ESP": echo "Ola.$prenom. !";
        break;
         }
      
         
     }


     salutations("Virgile", "FRA");






    
    











    