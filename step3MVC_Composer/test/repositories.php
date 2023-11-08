<?php
$entityManager = require_once("./config/doctrine2-config.php");

use App\Entity\Country;

$countryRepository = $entityManager->getRepository(Country::class);

// Récupération d'un pays par son id
echo "Récupération du pays ayant l'id 5 <br>";
$country = $countryRepository->find(5);
echo "<pre>";
var_dump($country);
echo "</pre>";

// Récupération d'un pays par son label
echo "Récupération du pays dont le nom est Espagne <br>";
$countriesByName = $countryRepository->findBy(["label" => "Espagne"]);
echo "<pre>";
var_dump($countriesByName);
echo "</pre>";
foreach ($countriesByName as $countryByName) {
    echo "<pre>";
    var_dump($countryByName);
    echo "</pre>";
}

// Récupération d'un pays par son label et son id
echo "Récupération du pays Irlande ayant l'id 9 <br>";
$countriesByName = $countryRepository->findBy(["id" => "9", "label" => "Irlande"]);
foreach ($countriesByName as $countryByName) {
    echo "<pre>";
    var_dump($countryByName);
    echo "</pre>";
}

// Récupération des 5 pays en excluant le premier par ordre décroissant
echo "Récupération des 5 pays nommés Irlande en excluant le premier par ordre décroissant <br>";
$limit = 5;
$offset = 1;
$orderBy = ["id" => "DESC"];
$countriesByLabelWithFilters = $countryRepository->findBy(["label" => "Irlande"], $orderBy, $limit, $offset);
foreach ($countriesByLabelWithFilters as $c) {
    echo "<pre>";
    var_dump($c);
    echo "</pre>";
}

// Utilisation de findByLabel
echo "Récupération du pays dont le nom est Espagne en utilisant findByLabel <br>";
$countriesByName = $countryRepository->findByLabel("Japon");
foreach ($countriesByName as $countryByName) {
    echo "<pre>";
    var_dump($countryByName);
    echo "</pre>";
}
