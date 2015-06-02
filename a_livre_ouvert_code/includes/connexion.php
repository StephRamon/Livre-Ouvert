<?php

echo "coucou";

try {$a_livre_ouvert = new PDO('mysql:host=localhost:8889;dbname=a_livre_ouvert;charset=utf8','root','root');}

catch(Exception $e) {
	echo 'Erreur : '.$e->getMessage().'<br />';
	echo 'N° : '.$E->getCode();}

$auteurs = $a_livre_ouvert->query('select * from auteur order by auteur_nom');

while ($auteur = $auteurs->fetch()){
	echo $auteur['auteur_nom']. ' ' . $auteur['auteur_prenom'] . "<br />";
}

?>