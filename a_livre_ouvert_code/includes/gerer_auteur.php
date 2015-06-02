<?php

include 'gerer_connexion_db.php';

function listerTousLesAuteurs() {
	$biblio = openConnextionDb();
	$auteurs = $biblio->query('select * from auteur order by auteur_nom');

	echo "	<table id='table_auteur' class='table_listing'>
				<thead>
					<tr>
						<th>Nom</th>
						<th>Prenom</th>
						<th>Naissance</th>
						<th>Mort</th>
						<th>Sexe</th>
					</tr>
				</thead>
				<tbody>";

		while ($auteur = $auteurs->fetch()) {
			echo 	"<tr>" .
					"<td  class='majuscule'>" . $auteur['auteur_nom'] . "</td>" .
	                 "<td>" . $auteur['auteur_prenom'] . "</td>" .
	                 "<td>" . $auteur['auteur_annee_naissance'] . "</td>" .
	                 "<td>" . $auteur['auteur_annee_deces'] . "</td>" .
	                 "</tr>";
        }/*while*/
    
    echo "</tbody>
          </table>";
    $biblio = null; // fermeture de la db"

}/*function*/



?>