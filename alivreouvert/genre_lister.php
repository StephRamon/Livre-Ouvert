<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ALO - Liste par genre</title>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
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
              <h1>Chercher des livres par genre</h1>
              
              <form action="lister_par_genre.php"
                    method="post">
                  <label for="genre">Choisissez un genre&#8239&#58;</label>
                        <?php
                            include("includes/genre_selectionner.php");
                            selectGenres();
                           //echo "Jusqu'ici, tout va bien!";
                        ?>
                  <br /><br />
                  <input type="submit"
                         value="Lancer la recherche" />
              </form>
            </section> <!--content-->

            <div class="break_float"></div>
        </div> <!--main_content-->

        <footer id="footer">
            <?php
                include 'includes/footer.php';
             ?>
        </footer>
    </div> <!--wrapper-->
</body>
</html>