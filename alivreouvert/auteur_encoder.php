<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajouter un auteur</title>
    <link type="text/css"
          rel="stylesheet"
          href="style.css" />
</head>
<body>
  <div id="wrapper">
        <header id="banner">
            <?php
                include 'includes/banner.php';
            ?>
        </header>
        <div id="main_content">
            <div id="menu_circular">
                <?php
                    include 'includes/menu_circular.php';
                ?>
            </div>
            <asside id="left_menu">
                <?php
                    include 'includes/menu_aside.php';
                ?>
            </asside>
            <section id="content">
              <h2>Encoder un auteur</h2>
                    <form action="includes/encoder_un_auteur.php"
                          method="post">
                        <label for="nom_auteur">Nom de l'auteur&#8239&#58;</label>
                        <input type="text"
                               name="nom_auteur"
                               id="nom_auteur"
                               size="50"
                               placeholder="Nom"
                               required
                               value="" />
                        <br /><br />
                        <label for="prenom_auteur">Pr&eacute;nom de l'auteur&#8239&#58;</label>
                        <input type="text"
                               name="prenom_auteur"
                               id="prenom_auteur"
                               size="50"
                               placeholder="Pr&eacute;nom"
                               value="" />
                        <br /><br />
                        <label for="annee_naissance">Ann&eacute;e de naissance&#8239&#58;</label>
                        <input type="number"
                               max="2015"
                               name="annee_naissance"
                               id="annee_naissance"
                               size="50"
                               placeholder="Ann&eacute;e de naissance"
                               value="" />
                        <br /><br />
                        <label for="annee_deces">Ann&eacute;e de d&eacute;cès&#8239&#58;</label>
                        <input type="number"
                               max="2015"
                               name="annee_deces"
                               id="annee_deces"
                               size="50"
                               placeholder="Ann&eacute;e de d&eacute;cès"
                               value="" />
                        <br /><br />
                        <label for="sexe">Sexe&#8239&#58;</label>
                        Masculin
                        <input type="radio"
                               name="sexe"
                               id="sexe"
                               value="Masculin" 
                               checked/>
                        &emsp;
                        F&eacute;minin
                        <input type="radio"
                               name="sexe"
                               id="sexe"
                               value="Féminin" />

                        <br /><br /><br />
                        <input type="submit"
                               value="Insérer un auteur" />
                    </form>
              </section>
            </div> <!--main_content-->
            <footer id="footer">
            <?php
                include 'includes/footer.php';
             ?>
            </footer>
  </div> <!--wrapper-->
</body>
</html>