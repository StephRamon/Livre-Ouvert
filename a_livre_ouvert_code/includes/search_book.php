<?php


//echo 'OK<br />';
try {$biblio = new PDO('mysql:host=localhost;dbname=a_livre_ouvert;charset=utf8','root','root');}
//echo 'Connexion DB ok<br />';

catch(Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}

if ( isset ($_POST['search-book-title']) == true
     && empty ($_POST['search-book-title']) == false)
  {
       $searchBookTitle =  $_POST['search-book-title'];
       
       echo "Le titre que vous cherchez est ".$searchBookTitle."<br/>";
       
       $livres = $biblio->query("select * from livre where livre_titre = '$searchBookTitle'");

        echo "<table border=1>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                </tr>";
         while ($livre = $livres->fetch())
         {
           echo "<tr>" .
                "<td>" . $livre['livre_titre'] . "</td>" .
                "<td>" . $livre['livre_auteur_fk'] . "</td>" .
                "</tr>";
          };//while   
  }//if


echo "fin";
?>
