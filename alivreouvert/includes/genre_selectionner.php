<?php

include 'gerer_connexion_db.php';

function selectGenres(){

	$biblio  = openConnexionDb(); //ouverture de la db;
	$genres = $biblio->query("SELECT * from genre_litteraire order by genre_nom");

	echo "<select name='genrePk'>";

	while($genre=$genres->fetch()){
		echo "<option value=".$genre[genre_pk].">".$genre[genre_nom]."</option>";
	}
	echo "</select>";	
}
?>