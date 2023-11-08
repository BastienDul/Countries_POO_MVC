<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="./src/css/normalize.css">
    <link rel="stylesheet" href="./src/css/style.css">
</head>

<body>

    <header>
        <h1>
            Ma petite liste de Pays !
        </h1>
    </header>
    
    <main>
        <h1>Détails <?= $showOneCountry['label_countries'] ?> </h1>

        <h2>Ajouter une information pour ce pays : </h2>

        <form action="index.php?action=addCountryDetail&id=<?= $showOneCountry['id_countries'] ?>" method="post">
            <label for="label">Clé : </label>
            <input type="text" name="label">
            <label for="value">Valeur : </label>
            <input type="text" name="value">
            <input type="submit" class="add" name="submitBtn" value="Ajouter">
        </form>

        <div class="countriesList">
            <?php
            foreach ($showDetail as $details) {
            ?>
                <a href='' class="btn"><?= $details['label'] ?> <br> <span> <?= $details['value'] ?> </span></a>

            <?php
            }
            ?>
        </div>

        <br>
        <div class="retour">
            <a class="btn" href="index.php">Retour</a>
        </div>

    </main>
</body>

</html>