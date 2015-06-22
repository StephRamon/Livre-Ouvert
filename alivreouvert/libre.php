<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ALO - Domaine public</title>
	<link 	rel="stylesheet" 
			type="text/css" 
			href="style.css">

    <link   rel="stylesheet" 
            type="text/css"
            href="css/demo.css" />
    
    <link   rel="stylesheet" 
            type="text/css" 
            href="css/component.css" />
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
            </div> <!--menu_cirucular-->
            <asside id="left_menu">
                <?php
                    include 'includes/menu_aside.php';
                ?>
            </asside>
            <section id="content">
                <article>
                    <h1>Qu'est-ce que le domaine public?</h1>
                    <p>En droit de la propri&eacute;t&eacute; intellectuelle le domaine public d&eacute;signe l'ensemble des œuvres de l'esprit et des connaissances dont l'usage n'est pas ou n'est plus restreint par la loi.</p>
                    <p>Cela peut être par exemple&nbsp;:</p>
                    <ul>
                        <li>un savoir sur lequel aucun monopole n'est accord&eacute;, comme une formule math&eacute;matique&nbsp;;</li>
                        <li>une œuvre de l'esprit qui n'est pas prot&eacute;g&eacute;e par le droit d'auteur, comme le discours d'un parlementaire&nbsp;;</li>
                        <li>une œuvre de l'esprit qui n'est plus prot&eacute;g&eacute;e par le droit d'auteur, après expiration&nbsp;;</li>
                        <li>un brevet qui a expir&eacute;.</li>
                    </ul>

                    <p>Dans les deux derniers cas le vocabulaire juridique parle alors d'entr&eacute;e dans le domaine public, l'expression « tomber dans le domaine public » &eacute;tant couramment employ&eacute;e.</p>

                    <p>L'entr&eacute;e dans le domaine public ne correspond pas &agrave; une r&eacute;alit&eacute; uniforme dans le monde. Le copyright et le droit d'auteur notamment varient d'un pays &agrave; l'autre. Ainsi, au Canada une œuvre entre dans le domaine public 50 ans après la mort de tous ses auteurs, alors qu'en France cette dur&eacute;e a &eacute;t&eacute; &eacute;tendue &agrave; 70 ans après la mort des auteurs.</p>

                    <p>L'entr&eacute;e dans le domaine public ne signifie pas non plus que plus aucune restriction n'existe sur l'œuvre. Pour une photographie de modèle, la personne sur la photo dispose toujours de son droit &agrave; l'image, même si l'image est entr&eacute;e dans le domaine public. Dans les pays où s'applique le droit d'auteur, les auteurs et leurs h&eacute;ritiers conservent ind&eacute;finiment leur droit moral. Dans ce cadre, les œuvres n'entrent dans le domaine public que lorsque les droits de chaque auteur sont &eacute;puis&eacute;s.</p>

                    <p>Dans les pays de copyright, comme les États-Unis d'Am&eacute;rique, il est possible pour l'auteur de renoncer totalement &agrave; ses droits1. Dans les pays qui appliquent le droit d'auteur, comme la France, certains droits demeurent, même lorsque l'œuvre est dans le domaine public, le droit moral ne pouvant faire l'objet d'une renonciation. Certaines licences, telle la licence CC0, tentent de se rapprocher le plus possible du domaine public, en permettant de renoncer &agrave; autant de droits que le permet la loi.</p>

                    <p>Le domaine public f&eacute;dère de nombreuses activit&eacute;s &eacute;conomiques, bas&eacute;es notamment sur l'exploitation des œuvres de l'esprit ou des connaissances2. C'est le cas par exemple des &eacute;ditions de cr&eacute;ations litt&eacute;raires anciennes ou des m&eacute;dicaments g&eacute;n&eacute;riques (dont le brevet est venu &agrave; &eacute;ch&eacute;ance).</p>
                    <hr>
                    <p>Sources : <a href="https://fr.wikipedia.org/wiki/Domaine_public_%28propri%C3%A9t%C3%A9_intellectuelle%29" target="_blank">Wikipédia - Domaine public</a></p>
                </article>
            </section>

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