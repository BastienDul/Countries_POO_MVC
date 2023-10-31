<?php


// PAYS !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

// Récuperer les infos de modele.php
require './Model/countryModele.php';

// Fonction qui affiche la page des pays par nom
function afficherPays() {

// stocker la function getCountries() dans la variables $country 
$allCountry = getCountries();

// nous avons besoin d'avoir acces a countriesView.php afin d'afficher les infos
require './View/countriesView.php';

}

function afficherDetailPays() {
    
    $id = $_GET['id'];

    if (isset($id)) {
        $detail = getDetail($id);
        $oneCountry = getCountry($id);
    }
    
    
    require './View/countriesDetailsView.php';
}

function addCountryDetail ($id, $label, $value){

    $result = saveCountryDetail($id, $label, $value);

    if ($result == false) {
        die('Erreur : impossible d\'ajouter le nouveau détail');
    } else{
        header('Location: index.php?action=detail&id='. $id);
    }
}