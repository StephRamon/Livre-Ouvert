<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>À Livre Ouvert - Accueil</title>
	<link 	rel="stylesheet" 
			type="text/css" 
			href="style.css">
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
                <p>
                    Site de littérature française avec textes libres de droit au format epub.
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