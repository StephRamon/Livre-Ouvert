<?php

include 'gerer_connexion_db.php';


function listerResultatsGenresRechercher(){
    $biblio  = openConnexionDb(); //ouverture de la db;
    if(isset($_POST['genrePk']) == true && empty($_POST['genrePk']) == false){
	   $genrePk = $_POST['genrePk'];

	   $genrelivres = $biblio->prepare("SELECT livre_titre, auteur_nom,livre_epub FROM livre, auteur, genre_litteraire WHERE genre_nom = :genre");
	   $genrelivres->execute(array('genre' => $genrePk));

    	echo "<p>Les livres avec un <b>".$genrePk."</b>  sont</p>";
        echo "<table id='lister-par-genre' class='table-listing'>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Fichier</th>
                    </tr>
                </thead>
                <tbody>";
        while ($genrelivre = $genrelivres->fetch()){
            echo "<tr>" .
                     "<td>" . $genrelivre['livre_titre'] . "</td>" .
                     "<td>" . $genrelivre['auteur_nom'] . "</td>" .
                     "<td>" . $genrelivre['livre_epub'] . "</td>" .
                 "</tr>";
        };//while
        echo "</tbody>
              </table>";
    }//if
    $biblio = null; // fermeture de la db   
}
//echo "Jusqu'ici, tout va bien!";
?>
