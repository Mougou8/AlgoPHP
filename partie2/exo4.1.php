<h1>Exercice 4.1</h1>

<p>
    AFFICHAGE
</p>

<?php

$capitales = [
    "France"=> "Paris",
    "Allemagne"=> "Berlin",
    "USA"=> "Washingtone",
    "Italie"=> "Rome",
    "Espagne"=> "Madrid"
];

foreach($capitales as $pays => $capitale){
    echo "Le pays $pays a pour capitale : $capitale<br>";
}
    echo afficherTableauHTML($capitales);

function afficherTableauHTML($capitales){
    $result = "<table border=1>
                   <thead>
                         <tr>
                             <th>Capitales</th>
                             <th>Ville</th>
                             <th>Lien</th>    
                                                         
                                                    
                        </tr>;
                   
                
                   </thead>;
              <tbody>";
foreach($capitales as $pays => $ville){ 

            $result .=  "<tr>
                            <td> = ".mb_strtoupper($pays)."</td>
                            <td> = ".ucfirst($ville)."</td>
                          
                            <td> = <a href='https://en.wikipedia.org/wiki/".$ville."'>$ville</a></td>
                        </tr>";

}                                                    
                                   
        $result .= "</tbody></table>";
                  
        return $result;
                
}