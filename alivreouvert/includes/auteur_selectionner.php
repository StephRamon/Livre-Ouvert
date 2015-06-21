<?php

include 'gerer_connexion_db.php';

function selectAuteurs(){

	$biblio  = openConnexionDb(); //ouverture de la db;
	$auteurs = $biblio->query("SELECT * from auteur order by auteur_nom");

	echo "<select name='auteurPk'>";

	while($auteur=$auteurs->fetch()){
		echo "<option value=".$auteur[auteur_pk].">".$auteur[auteur_nom]."</option>";
	}
	echo "</select>";	
}
?>