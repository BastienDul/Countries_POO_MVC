<?php
$entityManager = require_once("./config/doctrine2-config.php");
//$entityManager = require_once join(DIRECTORY_SEPARATOR, [$_SERVER['DOCUMENT_ROOT'], "step11-doctrine", "config", 'doctrine2-config.php']);
use App\Entity\Country;

/*
************************** Ajout d'un pays ***************************
*/

// echo "AJOUT D'UN PAYS ";
// $ajoutPays = new Country();
// echo "<pre>";
// var_dump($ajoutPays); // On affiche le contenu de l'objet pour voir son contenu
// echo "</pre>";

// $ajoutPays->setLabel("Japon"); // Attribution d'un nom à notre pays
// echo "<pre>";
// var_dump($ajoutPays); // On affiche le contenu de l'objet pour voir son contenu
// echo "</pre>";

// // Gestion de la persistance
// $entityManager->persist($ajoutPays);
// $entityManager->flush();
// echo "<pre>";
// var_dump($ajoutPays); // On affiche le contenu de l'objet pour voir son contenu
// echo "</pre>";

// // Vérification du résultats
// echo "Identifiant du pays créé : ", $ajoutPays->getId();



/*
********************** Récupération d'un pays ******************************
*/
// echo "<br><br>RECUPERATION D'UN PAYS ";
// // On récupère le pays qui possède l'id 1
// $country = $entityManager->find(Country::class, 4);
// echo sprintf(
//     "Country (id: %s, label: %s)",
//     $country->getId(),
//     $country->getLabel()
// );



/*
* Mise à jour d'un pays
*/
// echo "<br><br>MISE A JOUR D'UN PAYS<br><br>";
// $country = $entityManager->find(Country::class, 1);
// echo "<pre>";
// var_dump($country); // On affiche le contenu de l'objet pour voir son contenu
// echo "</pre>";

// $country->setLabel("La France");
// echo "<pre>";
// var_dump($country); // On affiche le contenu de l'objet pour voir son contenu
// echo "</pre>";
// // Gestion de la persistance
// $entityManager->persist($country);
// $entityManager->flush();
// echo "<pre>";
// var_dump($country); // On affiche le contenu de l'objet pour voir son contenu
// echo "</pre>";

/*
* Suppression d'un pays
*/
// echo "<br><br>SUPPRESSION D'UN PAYS";
// $country = $entityManager->find(Country::class, 7);
// echo "<pre>";
// var_dump($country); // On affiche le contenu de l'objet pour voir son contenu
// echo "</pre>";

// $entityManager->remove($country);
// $entityManager->flush($country);

// // Récupération pour vérifier la suppression effective du pays
// $country = $entityManager->find(Country::class, 18);
// echo "<pre>";
// var_dump($country); // doit renvoyer NULL
// echo "</pre>";

// ************************* a suivre *************************

// $country = unserialize("informations du pays serialisées");
// // Reprise en charge de l'objet par l'entity manager
// $entityManager->merge($country);
// $country->setLabel("Belgique");
// $entityManager->flush();


// $countryRepository = $entityManager->getRepository(Country::class);

