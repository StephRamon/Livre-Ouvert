<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>À Livre Ouvert - Ajouter un auteur</title>
    <link href="style.css"
          type="text/css"
          rel="stylesheet" />
</head>
<body>
<h1>À Livre Ouvert</h1>
<h2>Ajouter un auteur</h2>
<form action="includes/inserer_un_auteur.php"
      method="post">
    <label for="nom-auteur">Nom de l'auteur</label>
    <input type="text"
           name="nom-auteur"
           id="nom-auteur"
           size="50"
           placeholder="Nom"
           required
           values="" />
    <br /><br />
    <label for="prenom-auteur">Prénom de l'auteur</label>
    <input type="text"
           name="prenom-auteur"
           id="prenom-auteur"
           size="50"
           placeholder="Prénom"
           values="" />
    <br /><br />
    <label for="annee-naissance">Année de naissance</label>
    <input type="text"
           name="annee-naissance"
           id="annee-naissance"
           size="50"
           placeholder="Annee de naissance"
           values="" />
    <br /><br />
    <label for="annee-déces">Année de décès</label>
    <input type="text"
           name="annee-décès"
           id="annee-décès"
           size="50"
           placeholder="Annee de décès"
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