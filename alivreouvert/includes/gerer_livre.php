<?php

include 'gerer_connexion_db.php';

function listerResultatsLivresRechercher(){
    $biblio  = openConnexionDb(); //ouverture de la db;
    if (isset ($_POST['search_book_title']) == true && empty ($_POST['search_book_title']) == false){
        $searchBookTitle =  $_POST['search_book_title'];

        $livres = $biblio->prepare("SELECT livre_titre, auteur_nom, livre_epub from livre, auteur where livre_titre like concat ('%', :titreLivre, '%') and auteur_pk=livre_auteur_fk");
        $livres->execute(array('titreLivre' => $searchBookTitle));
        //echo "Jusqu'ici, tout va bien!";
        while ($livre = $livres->fetch()){  
        echo "<p>L'auteur du titre &#34;<b>".$livre['livre_titre']."</b>&#34; est&nbsp;<b>".$livre['auteur_nom']."</b></p>";
        echo "<a href=". $livre['livre_epub'].">Télécharger ce livre</a>";
        };//while  
    }//if
    $biblio = null; // fermeture de la db
}

function listerTousLesLivres(){
    $biblio  = openConnexionDb(); //ouverture de la db;
    $livres = $biblio->query("select livre_titre,  auteur_nom, livre_epub from livre, auteur where auteur_pk=livre_auteur_fk");

    echo "<table id='lister-livre' class='table-listing'>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Fichier ePub</th>
                </tr>
            </thead>
            <tbody>";
    while ($livre = $livres->fetch()){
        echo "<tr>" .
                 "<td>" . $livre['livre_titre'] . "</td>" .
                 "<td>" . $livre['auteur_nom'] . "</td>" .
                 "<td><a href=" . $livre['livre_epub'] . ">Télécharger ce livre</a></td>" .
             "</tr>";
    };//while
    echo "</tbody>
          </table>";

    $biblio = null; // fermeture de la db
}

?>