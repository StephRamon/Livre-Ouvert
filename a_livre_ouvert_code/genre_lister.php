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
            <asside id="left_menu">
                <?php
                    include 'includes/menu_aside.php';
                ?>
            </asside>
            <section id="content">
              <h1>Chercher des livres par genre</h1>
              <!--
              search_book.php est le script qui va recevoir le nom du livre recherché
              ce nom est contenu dans la variable créée par le input text dont le name
              est search-book-title
              -->
              <form action="livre_rechercher_genre.php"
                    method="post">
                  <label for="nationalite">Genres</label>
                        
                        <?php
                            include 'includes/genre_selectionner.php'
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