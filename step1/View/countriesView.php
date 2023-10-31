<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries POO Exercice</title>
    <!-- Inclusion des feuilles de style CSS -->
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <h1>Liste des pays</h1>
        <!-- Affichage de la liste des pays récupérée depuis le code PHP -->
        <div class="countriesList">
            <?php
            // Boucle pour parcourir chaque pays dans $allCountry et les afficher
            foreach ($allCountry as $country) {
              ?>
              <!-- Création d'un lien pour chaque pays pour afficher les détails -->
              <a href='index.php?action=detail&id=<?= $country['id_countries'] ?>' class="btn"><?= $country['label_countries'] ?> <br> <span>Afficher les Détails</span></a> 
            <?php
            }
            ?>
        </div>
    </main>
</body>
</html>
