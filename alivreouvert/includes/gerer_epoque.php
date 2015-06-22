<?php

include 'gerer_connexion_db.php';

echo "Jusqu'ici, tout va bien!";

function isterResultatsEpoquesRechercher(){
    $biblio  = openConnexionDb(); //ouverture de la db;
	$epoquePk = $_POST['epoquePk'];

	$epoquelivres = $biblio->prepare("SELECT livre_titre, auteur_nom, livre_epub FROM livre, auteur, epoque WHERE epoque_dates = :epoque");
	$epoquelivres->execute(array('epoque' => $epoquePk));

    	echo "<p>Les livres écrits durant cette période sont</p>";
        echo "<table id='lister-par-epoque' class='table-listing'>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                    </tr>
                </thead>
                <tbody>";
        while ($epoquelivre = $epoquelivres->fetch()){
            echo "<tr>" .
                     "<td>" . $epoquelivre['livre_titre'] . "</td>" .
                     "<td>" . $epoquelivre['auteur_nom'] . "</td>" .
                 "</tr>";
        };//while
        echo "</tbody>
              </table>";
    }//if
    $biblio = null; // fermeture de la db   
}
echo "Jusqu'ici, tout va bien!";
?>
