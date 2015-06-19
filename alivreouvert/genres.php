<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>À Livre Ouvert - Accueil</title>
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
                <h1>Les genres litt&eacute;raires</h1>
                
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