<?php


//echo 'OK<br />';
try {$biblio = new PDO('mysql:host=localhost;dbname=a_livre_ouvert;charset=utf8','root','root');}
//echo 'Connexion DB ok<br />';

catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}

//isset — Détermine si une variable est définie et est différente de NULL
//http://www.lephpfacile.com/manuel-php/function.isset.php

if ( isset ($_POST['search-book-title']) == true
     && empty ($_POST['search-book-title']) == false){
     $searchBookTitle =  $_POST['search-book-title'];
     
     echo "Ce que vous cherchez est ".$searchBookTitle."<br/>";
     
     // titre exact
     $livres = $biblio->query("select * from livre where livre_titre = '$searchBookTitle'");

      //le like %ma_variable% va rechercher dans la table n'importe quoi qui contient ce qui est 
      //dans variable en majuscule ou miniscule, au debut, au milieu ou à la fin, peu importe
      //$livres = $biblio->query("select * from livre where livre_titre like '%$searchBookTitle%'");

      // on affiche dans un tableau les données qui correspondent à la requête
      echo "<table border=1>
              <tr>
                  <th>Titre</th>
                  <th>Auteur</th>
              </tr>";
       while ($livre = $livres->fetch()){
         echo "<tr>" .
              "<td>" . $livre['livre_titre'] . "</td>" .
              "<td>" . $livre['livre_auteur_fk'] . "</td>" .
              "</tr>";
      };//while   
}//if


echo "fin";
?>
