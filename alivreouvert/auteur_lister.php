<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ALO - Liste des auteurs</title>
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
                <h1>Liste des auteurs</h1>
                <?php
                  include("includes/gerer_auteur.php");
                  listerTousLesAuteurs();
                ?>
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
