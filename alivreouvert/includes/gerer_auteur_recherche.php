<?php

include 'gerer_connexion_db.php';

function listerResultatsAuteursRechercher(){
    $biblio  = openConnexionDb(); //ouverture de la db;
    if (isset ($_POST['search_author_name']) == true && empty ($_POST['search_author_name']) == false){
        $searchAuthorName =  $_POST['search_author_name'];

        $livres = $biblio->prepare("SELECT livre_titre, auteur_nom, livre_epub from livre, auteur where auteur_nom like concat ('%', :nomAuteur, '%') and auteur_pk=livre_auteur_fk");
        $livres->execute(array('nomAuteur' => $searchAuthorName));
        //echo "Jusqu'ici, tout va bien!";



        echo "<p>Votre recherche est <b>".$searchAuthorName."</b></p>";
        echo "<p><br /></p>";

        echo "<p>Un auteur correspond à votre recherche. Voici les titres disponibles sur notre site :</p>";
        echo "<p><br /></p>";
        
        while ($livre = $livres->fetch()){

            echo "<ul> 
                 <li>". $livre['livre_titre'] .", ". $livre['auteur_nom'] .".



                 <a href=". $livre['livre_epub'].">Télécharger ce livre</a></li>
                </ul>";
        };//while
        echo "</tbody>
              </table>";
        
    }//if
    $biblio = null; // fermeture de la db
}

?>