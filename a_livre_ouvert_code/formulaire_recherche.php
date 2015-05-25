<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>À Livre Ouvert</title>
	<link 	rel="stylesheet" 
			type="text/css" 
			href="">
</head>
<body>
<h1>À Livre Ouvert</h1>
<hr/>


<h2>Chercher un livre</h2>
<form action="includes/search_book.php"
      method="post">
    <label for="titre-livre-rechercher">Titre de l'ouvrage</label>
    <input type="text"
           name="search-book-title"
           id="titre-livre-rechercher"
           size="50"
           placeholder="titre"
           required
           values="" />
    <br /><br />
    <input type="submit"
           value="Lancer la recherche" />
</form>
</body>
</html>


