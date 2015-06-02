<?php

    try {$biblio = new PDO('mysql:host=localhost:8889;dbname=a_livre_ouvert;charset=utf8','root','root');
    }

    catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    }

    $auteurNom = $_POST["nom_auteur"];
    $auteurPrenom = $_POST["prenom_auteur"];
    $auteurNaissance = $_POST["annee_naissance"];
    $auteurDeces = $_POST["annee_deces"];


    $nouvelAuteur = $biblio->prepare("insert into auteur (auteur_nom, auteur_prenom) values (:nom, :prenom)");
    $nouvelAuteur->execute(array('nom' => $auteurNom,
                                 'prenom' => $auteurPrenom));


header ('location: http://localhost:8888/alivreouvert/index.php');
exit;
?>