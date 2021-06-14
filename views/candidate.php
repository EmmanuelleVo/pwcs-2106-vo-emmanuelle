<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La fiche de <?= $candidates->nom ?> - Écolo</title>
</head>
<body>
<h1><?= $candidates->nom ?> Philippe Lamberts</h1>
<div>
    <img src="<?= THUMBS.$candidates->photo ?>" alt="">
</div>
<div>
    <p><?= $candidates->nom ?> Philippe Lamberts est candidat au parlement européen pour l’arrondissementBelgique</p>
</div>
<input type="hidden" name="action" value="show">
<input type="hidden" name="resource" value="candidate">
<p><a href="index.php">Voir toutes nos listes</a></p>
</body>
</html>