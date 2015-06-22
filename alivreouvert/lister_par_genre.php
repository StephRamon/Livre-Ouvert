<?php

include 'gerer_connexion_db.php';

echo "Jusqu'ici, tout va bien!";

function listerParGenre(){
    $biblio  = openConnexionDb(); //ouverture de la db;
	$genrePk = $_POST['genrePk'];

	$livres = $biblio->query("SELECT livre_titre, auteur_nom FROM livre, auteur, genre_litteraire WHERE livre_genre_litteraire_fk like :genre");
	$livres->execute(array('genre' => $genrePk));

    	echo "<p>Les livres avec un <b>".$genrePk."</b>  sont</p>";
        echo "<table id='lister-par-genre' class='table-listing'>
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
echo "Jusqu'ici, tout va bien!";
?>
