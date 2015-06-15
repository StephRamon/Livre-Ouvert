<?php

include 'gerer_connexion_db.php';

function listerResultatsLivresRechercher(){
    $biblio  = openConnexionDb(); //ouverture de la db;
    if (isset ($_POST['search_book_title']) == true && empty ($_POST['search_book_title']) == false){
        $searchBookTitle =  $_POST['search-book-title'];

        $livres = $biblio->prepare("select
                                      livre_titre,
                                      auteur_nom,
                                      livre_annee,
                                      livre_edition_fk
                                    from
                                      livre,
                                      auteur
                                    where
                                      livre_titre like concat ('%', :titreLivre, '%')
                                      and
                                      auteur_pk=livre_auteur_fk");
        $livres->execute(array('titreLivre' => $searchBookTitle));

        echo "<p>Votre recherche est <b>".$searchBookTitle. "</b></p>";
        echo "<p>Voici le résultat de votre recherche</p>";
        echo "<p><br /></p>";
        echo "<table id='resultat-recherche-livre' class='table-listing'>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                    </tr>
                </thead>
                <tbody>";
        while ($livre = $livres->fetch()){
            echo "<tr>" .
                     "<td>" . $livre['livre_titre'] . "</td>" .
                     "<td>" . $livre['auteur_nom'] . "</td>" .
                 "</tr>";
        };//while
        echo "</tbody>
              </table>";
    }//if
    $biblio = null; // fermeture de la db
}

function listerTousLesLivres(){
    $biblio  = openConnexionDb(); //ouverture de la db;
    $livres = $biblio->query("select
                                livre_titre,
                                auteur_nom
                              from
                                livre,
                                auteur
                              where
                                auteur_pk=livre_auteur_fk");

    echo "<table id='lister-livre' class='table-listing'>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                </tr>
            </thead>
            <tbody>";
    while ($livre = $livres->fetch()){
        echo "<tr>" .
                 "<td>" . $livre['livre_titre'] . "</td>" .
                 "<td>" . $livre['auteur_nom'] . "</td>" .
             "</tr>";
    };//while
    echo "</tbody>
          </table>";

    $biblio = null; // fermeture de la db
}


?>