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
                <h1>Résultat de votre recherche</h1>
                <?php
                    include("includes/gerer_genre.php");
                    listerResultatsGenresRechercher();
                ?>
            </section>

            <div class="break_float"></div>
        </div>

        <footer id="footer">
            <?php
                include 'includes/footer.php';
             ?>
        </footer>
    </div> <!--wrapper-->
</body>
</html>