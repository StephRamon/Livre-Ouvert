<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ALO - Accueil</title>
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
                <h1>Site de litt&eacute;rature française avec textes libres de droits au format epub</h1>
                <p>Les objectifs principaux de ce site sont les suivants&nbsp;:</p> 
                <ul>
                    <li>Vous faire d&eacute;couvrir la litt&eacute;rature française appartenant au domaine public&nbsp;;</li>
                    <li>Vous faire d&eacute;couvrir les diff&eacute;rents genres de cette litt&eacute;rature&nbsp;;</li>
                    <li>Mettre les textes &agrave; votre disposition&nbsp;.</li>
                </ul>
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