<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ALO - Recherche d'un livre</title>
    <link href="style.css"
          type="text/css"
          rel="stylesheet" />
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
              <h1>Chercher un livre</h1>
              <!--
              search_book.php est le script qui va recevoir le nom du livre recherché
              ce nom est contenu dans la variable créée par le input text dont le name
              est search-book-title
              -->
              <form action="livre_rechercher_resultat.php"
                    method="post">
                  <label for="titre-livre-rechercher">Titre de l'ouvrage</label>
                  <input type="text"
                         name="search_book_title"
                         id="titre-livre-rechercher"
                         size="50"
                         placeholder="Titre"
                         required values="" />
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
