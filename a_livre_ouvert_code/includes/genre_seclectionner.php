//Connexion à la base de données
mysql_select_db("test");
 
//Tu lances la requête
$req=mysql_query("SELECT * FROM categories ");
 
echo '<select name="categories">'."\n";
//Boucle sur la requête
//[0] -> =id & [1] -> label
while($cat=mysql_fetch_row($req)){
	echo '<option value="'.$cat[0].'">'.$cat[1].'</option>'."\n";
}
echo '</select>'."\n";



<?php

include 'gerere_connexion_db';

function LivreParGenreSelectionner (){
	$biblio  = openConnexionDb(); //ouverture de la db;
	$genre = $biblio->query("select ")
}

