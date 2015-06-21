<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ALO - ePub</title>
	<link 	rel="stylesheet" 
			type="text/css" 
			href="style.css">

    <link   rel="stylesheet" 
            type="text/css"
            href="css/demo.css" />
    
    <link   rel="stylesheet" 
            type="text/css" 
            href="css/component.css" />
        
    <script src="includes/js/modernizr-2.6.2.min.js"></script>
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

                <h1>Qu'est-ce que le format .epub?</h1>
                <p>EPUB (acronyme de « electronic publication », « publication électronique » en français, parfois typographié « ePub », « EPub » ou « epub ») est un format ouvert standardisé pour les livres numériques. Proposé par l’IDPF, ces fichiers ont l’extension .epub.</p>

                    <h2>Concept</h2>

                    <p>EPUB est conçu pour faciliter la mise en page du contenu, le texte affiché étant ajusté pour le type d'appareil de lecture. Il est également conçu comme le seul format pouvant à la fois satisfaire les éditeurs pour leurs besoins internes et la distribution. Ce format englobe le standard Open eBook.</p>

                    <p>La dernière version standardisée, EPUB3[2], repose sur l'HTML5, ce qui ouvre la voie à de nombreuses extensions. Elle offre de nouvelles caractéristiques telles que la prise en charge de l'affichage de toutes les langues, un espace spécifique pour les métadonnées, un développement de l'interactivité permettant l'ajout de contenus enrichis (graphismes, typographies, multimédias).</p>

                    <p>Les livres au format EPUB3 peuvent connaître les fonctionnalités du lecteur à l'aide de la classe JavaScript epubReadingSystem spécialisée, cela leur permet d'adapter le contenu au produit.</p>

                    <p>Diverses applications permettent de créer un fichier EPUB directement ou à partir de fichiers dans d'autres formats.</p>

                    <h2>Matériel de lecture</h2>

                    <p>Excepté l'Amazon Kindle, toutes les liseuses sont compatibles avec le format EPUB. Diverses applications de lecture supportant l'EPUB sont également disponibles pour les ordinateurs personnels, les tablettes tactiles et les smartphones. En 2013 l'EPUB3 est peu utilisé et supporté.</p>
                    
                    <hr>

                    <p>Sources : https://fr.wikipedia.org/wiki/EPUB_%28format%29</p>
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