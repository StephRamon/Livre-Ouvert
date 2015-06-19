<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ALO - Recherche d'un auteur</title>
    <link href="style.css"
          type="text/css"
          rel="stylesheet" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="autocomplete.js"></script>
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
              <h1>Chercher un auteur</h1>
              <form action="auteur_rechercher_resultat.php"
                    method="post">
                  <label for="nom-auteur-rechercher">Nom de l'auteur</label>
                  <input type="text"
                         name="search_author_name"
                         id="recherche"
                         size="50"
                         placeholder="Nom de l'auteur"
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
