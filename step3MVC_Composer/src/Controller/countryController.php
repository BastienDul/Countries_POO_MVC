<?php

// namespace App\Controller;

use App\Model\CountryRepository; // Importation de la classe CountryRepository depuis l'espace de noms App\Model
use App\Model\DetailsRepository; // Importation de la classe DetailsRepository depuis l'espace de noms App\Model

require_once './src/Model/CountryRepository.php'; // Inclusion du fichier CountryRepository.php
require_once './src/Model/DetailsRepository.php'; // Inclusion du fichier DetailsRepository.php

function afficherPays()
{
    $allCountry = new CountryRepository; // Création d'une nouvelle instance de la classe CountryRepository

    $showCountry = $allCountry->getCountries(); // Appel de la méthode getCountries() de l'instance $allCountry

    require './src/View/countriesView.php'; // Inclusion du fichier countriesView.php
}

function afficherDetailPays()
{
    $id = $_GET['id']; // Récupération de la valeur de 'id' depuis la requête GET

    if (isset($id)) {
        $detail = new DetailsRepository; // Création d'une nouvelle instance de la classe DetailsRepository
        $showDetail = $detail->getDetail($id); // Appel de la méthode getDetail() de l'instance $detail

        $oneCountry = new CountryRepository; // Création d'une nouvelle instance de la classe CountryRepository
        $showOneCountry = $oneCountry->getCountry($id); // Appel de la méthode getCountry() de l'instance $oneCountry
    }

    require './src/View/countriesDetailsView.php'; // Inclusion du fichier countriesDetailsView.php
}

function addCountryDetail($id, $label, $value)
{

    $ajoutDetail = new DetailsRepository; // Création d'une nouvelle instance de la classe DetailsRepository
    $showAjoutDetail = $ajoutDetail->saveCountryDetail($id, $label, $value); // Appel de la méthode saveCountryDetail() de l'instance $ajoutDetail avec les paramètres $id, $label, $value

    if ($ajoutDetail == false) { // Vérification de l'échec de $ajoutDetail
        die('Erreur : impossible d\'ajouter le nouveau détail'); // Affichage d'un message d'erreur
    } else {
        header('Location: index.php?action=detail&id=' . $id); // Redirection vers une nouvelle page avec l'id dans la requête GET
    }
}
