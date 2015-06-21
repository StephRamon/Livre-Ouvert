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