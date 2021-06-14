<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maintenance</title>
</head>
<body>
<h1>Maintenance des images</h1>
<p>Ce formulaire vous permet de déclencher la génération de vignettes d’une
    taille de 300 px (largeur) sur 300 px (hauteur).</p>
<p>Les images originales seront d’abord redimensionnées et cropées</p>
<p>Pour le moment, il y a 345 vignettes dans le dossier des
    vignettes
    <p>
<form action="vignettes" method="post">
    <input type="submit" value="générer de nouvelles vignettes">
    <input type="hidden" name="action" value="store">
    <input type="hidden" name="resource" value="candidate">
</form>
</body>
</html>
