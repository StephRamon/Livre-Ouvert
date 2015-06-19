<?php

include 'gerer_connexion_db.php';

echo "Jusqu'ici, tout va bien!";

function listerParEpoque(){
    $biblio  = openConnexionDb(); //ouverture de la db;
	$epoquePk = $_POST['epoquePk'];

	$livres = $biblio->query("SELECT livre_titre, auteur_nom FROM livre, auteur, epoque WHERE livre_epoque_fk like :epoque");
	$livres->execute(array('epoque' => $epoquePk));

    	echo "<p>Les livres écrits durant cette époque sont</p>";
        echo "<table id='lister-par-epoque' class='table-listing'>
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
