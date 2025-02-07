<h1>Exercice 4</h1>

<P>
    A partir de l'exercice 2, ajouter une colonne suplémentaire dans le tableau HTML qui contiendra <br>
    le lien hypertexte du la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un<br>
    nouvel onglet et le tableau sera triée par ordre alphbétique de la capitale).<br>

    On admet que l'URL de la page Wikipédia de la capitale adopte la forme :<br>
        https://fr.wikipedia.org/wiki/<br>

        Le tableau passé en argument sera le suivant : <br>
        $capitales = ["France"=>"Paris", "Allemagne"=>"Berlin", <br>
        "USA"=>"Washington", "italie"=>"Rome", "Esapagne"=>"Madrid"];<br>

        AFFICHAGE :<br>

        Pays<br>          Capitales <br>     Lien wiki<br>
        ALLEMAGNE<BR>      Berlin<br>         Lien<br>
        ESPAGNE<BR>       Madrid<br>         Lien<br>
        FRANCE<BR>         Paris<br>          Lien<br>
        ITALIE <BR>        Rome<br>           Lien<br>
        USA<BR>            Washingtone<br>    Lien<br>

    </P> 
    <h2>Résultat</h2>

    <!-- <style>
        .lien {
            lien : lien;
        }

    </style> -->

    <?php

    
//     <!-- <table border=1>
//     Entête du tableau
//     <thead>
//         <tr>
//             <th>Pays</th>
//             <th>Capitales</th>
//         </tr>

//     </thead>
//     Corps du tableau
//      <tbody>
//         <tr>
//             <td>France</td>
//             <td>Paris</td>
//         </tr>
//         <tr>
//             <td>Allemagne</td>
//             <td>Berlin</td>
//         </tr>
//         <tr>
//             <td>USA</td>
//             <td>Washington</td>
//         </tr>
//      </tbody>
// </table> -->


    

    
    $capitales = [
    "Allemagne" => "Berlin",
    "Espagne" => "Madrid",
    "France" => "Paris",
    "Italie" => "Rome",
    "USA" => "Washington",
];

foreach($capitales as $pays => $capitale) {
    echo "Le pays $pays a pour capitale : $capitale<br>";
}
echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    $result  = "<table border=1>
                 <thead>
                     <tr>
                         <th>Pays</th>
                         <th>Capitales</th>
                         <th>Lien</th>
                     </tr>

                </thead>
    
            <tbody>";
 
    foreach($capitales as $pays  => $ville ){
        
        $result  .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($ville)."</td>
                        <td><a href='https://en.wikipedia.org/wiki/".$ville."'>$ville</a></td>
                   
                    <tr>";
    }
    
    $result .= "</tbody></table>";
    return $result;

 }   