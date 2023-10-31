<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <!-- Inclusion des feuilles de style CSS -->
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <!-- Affichage du titre des détails du pays -->
        <h1>Détails <?= $oneCountry['label_countries'] ?> </h1>

        <!-- Formulaire pour ajouter des informations sur le pays -->
        <h2>Ajouter une information pour ce pays : </h2>
        <form action="index.php?action=addCountryDetail&id=<?= $oneCountry['id_countries'] ?>" method="post">
            <label for="label">Clé : </label>
            <input type="text" name="label">
            <label for="value">Valeur : </label>
            <input type="text" name="value">
            <input type="submit" class="add" name="submitBtn" value="Ajouter">
        </form>

        <!-- Affichage des détails existants pour ce pays -->
        <div class="countriesList">
            <?php
            foreach ($detail as $details) {
            ?>
                <!-- Affichage des détails avec leur label et valeur -->
                <a href='' class="btn"><?= $details['label'] ?> <br> <span> <?= $details['value'] ?> </span></a>
            <?php
            }
            ?>
        </div>

        <br>
        <!-- Bouton pour retourner à la liste des pays -->
        <div class="retour">
            <a class="btn" href="index.php">Retour</a>
        </div>

    </main>
</body>

</html>
