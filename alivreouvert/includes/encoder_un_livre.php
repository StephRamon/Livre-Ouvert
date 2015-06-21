<?php
   
include 'gerer_connexion_db.php';

    $biblio  = openConnexionDb(); //ouverture de la db;


    $livreTitre = $_POST ["titre_livre"];
    $auteurNom = $_POST["livre_auteur_fk"];
    $genreLitteraire = $_POST["livre_genre_litteraire_fk"];

    $nouvelAuteur = $biblio->prepare("insert into auteur (auteur_nom, auteur_prenom, auteur_naissance, auteur_deces) values (:nom, :prenom, :naissance, :deces)"); 


    $nouvelAuteur->execute(array('nom' => $auteurNom,
                                 'prenom' => $auteurPrenom,
                                 'naissance' =>$auteurNaissance,
                                 'deces' => $auteurDeces));

header ('location: http://localhost:8888/alivreouvert/livre_lister.php');
exit;
?>