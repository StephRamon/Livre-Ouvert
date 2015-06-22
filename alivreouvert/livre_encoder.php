<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ALO -Ajouter un livre</title>
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
                    <form action="includes/encoder_un_livre.php"
                          method="post">
                        <label for="titre_livre">Titre du livre&#8239&#58;</label>
                        <input type="text"
                               name="titre_livre"
                               id="titre_livre"
                               size="50"
                               placeholder="Titre"
                               required
                               value="" />
                        <br /><br />
                        <label for="nom_auteur">Nom de l'auteur&#8239&#58;</label>
                                <?php
                                    include("includes/auteur_selectionner.php");
                                    selectAuteurs();
                                    echo "Jusqu'ici, tout va bien!";
                                ?>
                        <br /><br />
                        <label for="genre_litteraire">Genre littéraire&#8239&#58;</label>
                                <?php
                                    echo "Jusqu'ici, tout va bien!";
                                    include("includes/genre_selectionner.php");
                                    selectGenres();
                                ?>
                        <br /><br />
                        
                        <br /><br />
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