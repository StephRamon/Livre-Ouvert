<?php

include 'gerer_connexion_db.php';

function listerResultatsAuteursRechercher(){
    $biblio  = openConnexionDb(); //ouverture de la db;
    if (isset ($_POST['search_author_name']) == true && empty ($_POST['search_author_name']) == false){
        $searchAuthorName =  $_POST['search_author_name'];

        $livres = $biblio->prepare("SELECT livre_titre, auteur_nom from livre, auteur where auteur_nom like concat ('%', :nomAuteur, '%') and auteur_pk=livre_auteur_fk");
        $livres->execute(array('nomAuteur' => $searchAuthorName));
//echo "Jusqu'ici, tout va bien!";

echo "<p>Votre recherche est <b>".$searchAuthorName."</b></p>";
        echo "<p>Voici le r&eacute;sultat de votre recherche</p>";
        echo "<p><br /></p>";
        echo "<table id='resultat-recherche-auteur' class='table-listing'>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                    </tr>
                </thead>
                <tbody>";
        while ($livre = $livres->fetch()){
            echo "<tr>" .
                     "<td>" . $livre['livre_titre'] . "</td>" .
                     "<td>" . $livre['auteur_nom'] . "</td>" .
                 "</tr>";
        };//while
        echo "</tbody>
              </table>";
        
    }//if
    $biblio = null; // fermeture de la db
}

?>