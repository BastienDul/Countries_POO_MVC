<?php

// PAYS !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

// Inclure le fichier de modèle pour accéder aux fonctions liées aux pays
require './Model/countryModele.php';

// Fonction pour afficher la page des pays par nom
function afficherPays() {

    // Récupérer tous les pays en utilisant la fonction getCountries() et les stocker dans la variable $allCountry
    $allCountry = getCountries();

    // Inclure le fichier countriesView.php pour afficher les informations des pays
    require './View/countriesView.php';

}

// Fonction pour afficher les détails d'un pays spécifique
function afficherDetailPays() {

    // Récupérer l'ID du pays à partir de la requête GET
    $id = $_GET['id'];

    // Vérifier si l'ID est défini
    if (isset($id)) {
        // Récupérer les détails spécifiques et les informations du pays à partir de leurs ID respectifs
        $detail = getDetail($id);
        $oneCountry = getCountry($id);
    }
    
    // Inclure le fichier countriesDetailsView.php pour afficher les détails du pays
    require './View/countriesDetailsView.php';
}

// Fonction pour ajouter un détail au pays
function addCountryDetail ($id, $label, $value){

    // Appeler la fonction saveCountryDetail pour ajouter le détail au pays avec les paramètres spécifiés
    $result = saveCountryDetail($id, $label, $value);
    
    // Vérifier si l'ajout a échoué
    if ($result == false) {
        // Afficher un message d'erreur et arrêter l'exécution du script
        die('Erreur : impossible d\'ajouter le nouveau détail');
    } else{
        // Rediriger vers la page de détails du pays avec l'ID spécifié
        header('Location: index.php?action=detail&id='. $id);
    }
}
