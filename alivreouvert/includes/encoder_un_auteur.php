<?php
   
include 'gerer_connexion_db.php';

    $biblio  = openConnexionDb(); //ouverture de la db;

    $auteurNom = $_POST["nom_auteur"];
    $auteurPrenom = $_POST["prenom_auteur"];
    $auteurNaissance = $_POST["annee_naissance"];
    $auteurDeces = $_POST["annee_deces"];
    $auteurSexe = $_POST["sexe"];

    $nouvelAuteur = $biblio->prepare("insert into auteur (auteur_nom, auteur_prenom, auteur_naissance, auteur_deces) values (:nom, :prenom, :naissance, :deces)"); 


    $nouvelAuteur->execute(array('nom' => $auteurNom,
                                 'prenom' => $auteurPrenom,
                                 'naissance' =>$auteurNaissance,
                                 'deces' => $auteurDeces));

header ('location: http://localhost:8888/alivreouvert/auteur_lister.php');
exit;
?>