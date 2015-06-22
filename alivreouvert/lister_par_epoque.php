<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ALO - Liste par genre</title>
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
                    include("includes/gerer_epoque.php");
                    listerResultatsEpoquesRechercher();
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