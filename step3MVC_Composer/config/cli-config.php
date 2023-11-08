<?php

// PENSEZ A VErifier

//$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'doctrine2-config.php']);
// require_once("C:/laragon/www/CountriesPOO/step11-Doctrine/config/doctrine2-config.php");
require_once ("doctrine2-config.php");

use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($entityManager);
