<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajouter un auteur</title>
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
            <asside id="left_menu">
                <?php
                    include 'includes/menu_aside.php';
                ?>
            </asside>
            <section id="content">
  <form action="includes/encoder_un_auteur.php"
        method="post">
      <label for="nom_auteur">Nom de l'auteur</label>
      <input type="text"
             name="nom_auteur"
             id="nom_auteur"
             size="50"
             placeholder="Nom"
             required
             values="" />
      <br /><br />
      <label for="prenom_auteur">Prénom de l'auteur</label>
      <input type="text"
             name="prenom_auteur"
             id="prenom_auteur"
             size="50"
             placeholder="Prénom"
             values="" />
      <br /><br />
      <label for="annee_naissance">Année de naissance</label>
      <input type="text"
             name="annee_naissance"
             id="annee_naissance"
             size="50"
             placeholder="Année de naissance"
             values="" />
      <br /><br />
      <label for="annee_deces">Année de décès</label>
      <input type="text"
             name="annee_deces"
             id="annee_deces"
             size="50"
             placeholder="Année de décès"
             values="" />
      <br /><br />
      <label for="sexe">Sexe</label>
      Masculin
      <input type="radio"
             name="sexe"
             id="sexe"
             values="M" />
      &nbsp;&nbsp;&nbsp;
      Féminin
      <input type="radio"
             name="sexe"
             id="sexe"
             values="F" />

      <br /><br /><br />
      <input type="submit"
             value="Insérer un auteur" />
  </form>

<hr/>
</body>
</html>