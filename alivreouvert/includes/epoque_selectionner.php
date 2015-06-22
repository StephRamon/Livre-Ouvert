<?php

include 'gerer_connexion_db.php';

function selectEpoques(){

	$biblio  = openConnexionDb(); //ouverture de la db;
	$epoques = $biblio->query("SELECT * from epoque");

	echo "<select name='epoquePk'>";

	while($epoque=$epoques->fetch()){
		echo "<option value=".$epoque[epoque_pk].">".$epoques[epoque_dates]."</option>";
	}
	echo "</select>";
	$biblio = null; // fermeture de la db
}
?>