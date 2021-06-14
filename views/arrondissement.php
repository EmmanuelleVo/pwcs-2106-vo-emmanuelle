<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La liste du Parlement européen pour l’arrondissement Belgique - Écolo</title>
</head>
<body>
<h1>La liste du Parlement européen pour
    l’arrondissement
    Belgique</h1>
<?php if($candidates->arrondissement === 'Belgique'): ?>
<section>
    <h2>Les candidats</h2>
    <ol>
        <?php foreach ($candidates as $candidate): ?>
        <li>
            <div><?= $candidate->nom ?></div>
            <div>1e de liste</div>
            <div><img src="/images/thumbs/1E-Lamberts-cRalitza-Soultanova-1.jpg"
                      alt=""></div>
            <a href="/candidat/?id=1">Voir la
                fiche de Philippe Lamberts</a>
        </li>
        <?php endforeach; ?>
    </ol>
</section>
<?php endif; ?>
<p><a href="index.php">Toutes nos listes</a></p>
</body>
</html>
