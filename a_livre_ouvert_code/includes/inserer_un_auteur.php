<?php
/*echo "début connexion.php <br />";*/

/*ouverture de la connexion vers la DB */
/* my.ini windows port 3306 */

//echo 'OK<br />';
try {
    $biblio = new PDO('mysql:host=localhost:8889;dbname=a_livre_ouvert;charset=utf8','root','root');
    //echo 'Connexion DB OK<br />';
}

catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}


/* DEUXIÈME MÉTHODE : les données récupérées du formulaire et insérées par des variables
            .. nous récupérons les données depuis le formulaire et nous les stockons dans des variables
            .. nous insérons ces variables dans notre requete sql
    */
    /* recupération des données depuis le formulaire via la requête POST et le name des input du formulaire
       et stockage dans des variable*/
    /*$auteurNom = $_POST["nom-auteur"];
    $auteurPrenom = $_POST["prenom-auteur"];
    echo $auteurNom;
    echo "<br />";
    echo $auteurPrenom;
    echo "<br />";*/

    /* exécution de la requête : remarquez à nouveu le heu des " " et des ' ' et des . pour concaténer la chaine sql */
    //$biblio->exec("insert into auteur (auteur_nom, auteur_prenom) values ('".$auteurNom."', '".$auteurPrenom."')");

/* TROISIEME METHODE : Insertion de données variables grâce à une requête préparée et un array
            .. nous préparons la requête avec comme valuer le nom des variable dans le array --> utilisation de PREPARE
            .. nous exécutons la requête sur le array avec des champs nominatifs --> utilisation de EXECUTE
    */
    $auteurNom = $_POST["nom-auteur"];
    $auteurPrenom = $_POST["prenom-auteur"];
//    echo $auteurNom;
//    echo "<br />";
//    echo $auteurPrenom;
//    echo "<br />";

    $nouvelAuteur = $biblio->prepare("insert into auteur (auteur_nom, auteur_prenom) values (:nom, :prenom)");
    $nouvelAuteur->execute(array('nom' => $auteurNom,
                                 'prenom' => $auteurPrenom));

header ('location: http://localhost:8888/biblio/index.php');
exit;
//echo "<br /> Insertion OK";
?>







