<?php

include 'gerer_connexion_db.php';

function selectGenres(){

	$biblio  = openConnexionDb(); //ouverture de la db;
	$genres = $biblio->query("select * from genre_litteraire");

echo "<select name='genresPk'>";

while($genre=$genres->fetch()){
		echo "<option value=".$genre[genre_pk].">".$genre[genre_nom]."</option>";
	}
	echo "</select>";	
}


?>