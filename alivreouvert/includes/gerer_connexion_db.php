<?php

function openConnexionDb(){
	
	try {
		$db = new PDO('mysql:host=localhost:8889;dbname=a_livre_ouvert;charset=utf8','root','root');
		return $db;
	}

	catch(Exception $e) {
		$Message = 'Erreur : '.$e->getMessage().'<br />';
		$Code = 'N° : '.$e->getCode();
		return $Message;
	}
}

?>