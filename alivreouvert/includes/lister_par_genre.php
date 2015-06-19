<?php

include 'gerer_connexion_db.php';

echo "Jusqu'ici, tout va bien!";


function listerParGenre(){
    $biblio  = openConnexionDb(); //ouverture de la db;

    if (isset ($_POST['genre']) == true && empty ($_POST['genre']) == false){
        $genre =  $_POST['genre'];

    $livres = $biblio->prepare("SELECT livre_titre, auteur_nom, FROM livre, auteur, genre_litteraire WHERE livre_genre_litteraire_fk=:genre");
    $livres->execute(array('titreLivre' => $searchBookTitle));

    echo "<p>Le résultat de votre recherche sur le <b>".$searchBookTitle."</b></p>";
        echo "<p>est le suivant</p>";
        echo "<p><br /></p>";
        echo "<table id='resultat-recherche-livre' class='table-listing'>
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
