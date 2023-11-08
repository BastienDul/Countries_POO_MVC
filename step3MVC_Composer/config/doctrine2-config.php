<?php

//require_once join(DIRECTORY_SEPARATOR, [$_SERVER['DOCUMENT_ROOT'], "step11-Doctrine", "vendor", 'autoload.php']);

// require_once("C:/laragon/www/CountriesPOO/step11-Doctrine/vendor/autoload.php");
require_once("./vendor/autoload.php");

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$entitiesPath = [
    // join(DIRECTORY_SEPARATOR, ["C:/laragon/www/CountriesPOO/step11-Doctrine", "src", "entity"])
    join(DIRECTORY_SEPARATOR, ["C:/xampp/htdocs/Countries_POO_MVC/step3MVC_Composer","src","entity"])
];

/*$entitiesPath = [
    join(DIRECTORY_SEPARATOR, [__DIR__, "src", "entity"])
];*/

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

// Connexion à la base de données
$dbParams = [
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'charset'  => 'utf8',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'db_countries',
];

$config = Setup::createAnnotationMetadataConfiguration(
    $entitiesPath,
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationReader
);
$entityManager = EntityManager::create($dbParams, $config);

return $entityManager;
