<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des auteurs</title>
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
              <h1>Chercher des livres par période</h1>
              <!--
              search_book.php est le script qui va recevoir le nom du livre recherch&eacute;
              ce nom est contenu dans la variable cr&eacute;&eacute;e par le input text dont le name
              est search-book-title
              -->
              <form action="includes/lister_par_epoque.php"
                    method="post">
                  <label for="epoque">Choisissez une période&#8239&#58;</label>
                        <?php
                            include("includes/epoque_selectionner.php");
                            selectEpoques();
                        ?>
                  <br /><br />
                  <input type="submit"
                         value="Lancer la recherche" />
              </form>
            </section>

            <div class="break_float"></div>
        </div>

        <footer id="footer">
            <?php
                include 'includes/footer.php';
             ?>
        </footer>
    </div>
</body>
</html>