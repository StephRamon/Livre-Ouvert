<?php

include 'gerer_connexion_db.php';


function listerTousLesAuteurs(){
    $biblio  = openConnexionDb(); //ouverture de la db;
    $auteurs = $biblio->query("select * from auteur order by auteur_nom");

   echo "<table id='table-auteur' class='table-listing'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                </tr>
            </thead>
            <tbody>";

        while ($auteur = $auteurs->fetch()){
            echo "<tr>" .
                 "<td  class='majuscule'>" . $auteur['auteur_nom'] . "</td>" .
                 "<td>" . $auteur['auteur_prenom'] . "</td>" .
                 "</tr>";
        }// while
    echo "</tbody>
          </table>";
    $biblio = null; // fermeture de la db
}

?>