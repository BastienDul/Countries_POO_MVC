<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries POO Exercice</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <header>
        <h1>
            Ma petite liste de Pays !
        </h1>
    </header>

    <main>


        <h1>Liste des pays</h1>
        <div class="countriesList">
            <?php

            foreach ($showCountry as $country) {
            ?>
                <a href='index.php?action=detail&id=<?= $country['id_countries'] ?>' class="btn"><?= $country['label_countries'] ?> <br> <span>Afficher les Détails</span></a>

            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>