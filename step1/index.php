<?php

// Inclure le fichier du contrôleur pour gérer les actions liées aux pays
require 'Controller/countryController.php';

try {
    // Vérifier si le paramètre 'action' est défini dans l'URL
    if (isset($_GET['action'])) {
        // Vérifier si l'action est de détailler un pays spécifique
        if ($_GET['action'] == "detail") {
            // Vérifier si l'ID du pays est défini dans la requête GET
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                // Vérifier si l'ID n'est pas égal à zéro
                if ($id != 0) {
                    // Appeler la fonction pour afficher les détails du pays
                    afficherDetailPays();
                } else {
                    // Lever une exception si l'ID est invalide
                    throw new Exception("ID non valide", 1);
                }
            } else {
                // Lever une exception si l'ID n'est pas présent
                throw new Exception("ID inexistant", 2);
            }
        }
        // Si l'action est d'ajouter des détails sur un pays
        elseif ($_GET['action'] == 'addCountryDetail') {
            // Vérifier si les paramètres requis sont présents dans la requête GET et POST
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $label = $_POST['label'];
                $value = $_POST['value'];
                // Vérifier si l'ID n'est pas égal à zéro
                if ($id != 0) {
                    // Appeler la fonction pour ajouter des détails sur le pays
                    addCountryDetail($id, $label, $value);
                }
            }
        } else {
            // Lever une exception si l'action n'est pas reconnue
            throw new Exception("Action non valide", 3);
        }
    }
    // Si aucun paramètre 'action' n'est défini, afficher la liste des pays
    else {
        afficherPays();
    }
}  catch (Exception $e) {
    // Récupérer les détails de l'exception (message, fichier, ligne)
    $msgErreur = $e->getMessage();
    $file = basename($e->getFile());  
    $line = $e->getLine();
    // Inclure la vue d'erreur pour afficher l'erreur
    require('View/vueErreur.php');
}
