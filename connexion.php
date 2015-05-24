<?php

//$biblio = new PDO('mysql:host=localhost:8889;dbname=biblio;charset=utf8','root','');


try {$biblio = new PDO('mysql:host=localhost;dbname=a_livre_ouvert;charset=utf8','root','root');}

catch(Exception $e) {
	echo 'Erreur : ' .$e->getMessage() .'<br />';
	echo 'N° : '.$E->getCode();
}

$auteurs = $biblio->query('select * from auteur order by auteur_nom');

while ($auteur_pk = $auteurs->fetch()){
	echo $auteur_pk['auteur_nom']. ' ' . $auteur_pk['auteur_prenom'] . "<br />";
}


/*echo "fin connexion.php";*/
/*fetch = tout exécuter et récupérer les données*/
?>