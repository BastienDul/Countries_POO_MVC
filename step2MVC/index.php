<?php

namespace App; // Déclaration de l'espace de noms

require 'Controller/countryController.php'; // Inclusion du fichier countryController.php

// use App\Controller\countryController;

try { // Début du bloc try pour capturer les exceptions
    if (isset($_GET['action'])) { // Vérifie si 'action' est défini dans la requête
        if ($_GET['action'] == "detail") { // Vérifie si la valeur de 'action' est "detail"
            if (isset($_GET["id"])) { // Vérifie si 'id' est défini dans la requête
                $id = $_GET["id"]; // Affectation de la valeur de 'id' à la variable $id
                if ($id != 0) { // Vérifie si 'id' n'est pas égal à 0
                    afficherDetailPays(); // Appel de la fonction afficherDetailPays()
                } else {
                    throw new \Exception("ID non valide", 1); // Lance une exception avec un message si 'id' est égal à 0
                }
            } else {
                throw new \Exception("ID inexistant", 2); // Lance une exception avec un message si 'id' n'est pas défini dans la requête
            }
        } elseif ($_GET['action'] == 'addCountryDetail') { // Vérifie si la valeur de 'action' est 'addCountryDetail'
            if (isset($_GET['id']) && $_GET['id'] > 0) { // Vérifie si 'id' est défini dans la requête et est supérieur à 0
                $id = $_GET['id']; // Affectation de la valeur de 'id' à la variable $id
                $label = $_POST['label']; // Affectation de la valeur de 'label' à la variable $label
                $value = $_POST['value']; // Affectation de la valeur de 'value' à la variable $value
                if ($id != 0) { // Vérifie si 'id' n'est pas égal à 0
                    addCountryDetail($id, $label, $value); // Appel de la fonction addCountryDetail() avec les paramètres $id, $label, $value
                }
            }
        } else {
            throw new \Exception("Action non valide", 3); // Lance une exception avec un message si 'action' n'est pas valide
        }
    } else {
        afficherPays(); // Appel de la fonction afficherPays() si 'action' n'est pas défini dans la requête
    }
} catch (\Exception $e) { // Capture de l'exception et déclaration de la variable $e pour la gérer
    $msgErreur = $e->getMessage(); // Récupération du message d'erreur de l'exception dans la variable $msgErreur
    $file = basename($e->getFile()); // Récupération du nom du fichier où l'exception a été levée dans la variable $file
    $line = $e->getLine(); // Récupération du numéro de ligne où l'exception a été levée dans la variable $line
    require('View/vueErreur.php'); // Inclusion du fichier vueErreur.php
}
