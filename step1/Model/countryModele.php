<?php

// Récupérer tous les pays depuis la base de données
function getCountries()
{
    // Établir la connexion à la base de données
    $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Sélectionner tous les pays
    $req = $db->prepare('SELECT * FROM countries');
    $req->execute();
    $country = $req->fetchAll(PDO::FETCH_ASSOC);
    
    // Fermer la connexion à la base de données et retourner les pays
    $db = null;
    return $country;
}

// Récupérer les détails d'un pays spécifique en fonction de son ID
function getCountry($id)
{
    // Récupérer l'ID du pays à partir de la requête GET
    $id = $_GET['id'];

    // Établir la connexion à la base de données
    $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Sélectionner les détails d'un pays en fonction de son ID
    $req = $db->prepare('SELECT * FROM countries WHERE id_countries = ' . $id);
    $req->execute();
    $oneCountry = $req->fetch();
    
    // Fermer la connexion à la base de données et retourner les détails du pays
    $db = null;
    return $oneCountry;
}

// Récupérer les détails d'un pays en fonction de son ID
function getDetail($id)
{
    // Récupérer l'ID du pays à partir de la requête GET
    $id = $_GET['id'];
    
    // Établir la connexion à la base de données
    $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Sélectionner les détails d'un pays en fonction de son ID
    $req = $db->prepare('SELECT * FROM countries_details WHERE countries_id = ' . $id);
    $req->execute();
    $detailCountry = $req->fetchAll(PDO::FETCH_ASSOC);
    
    // Fermer la connexion à la base de données et retourner les détails du pays
    $db = null;
    return $detailCountry;
}

// Sauvegarder de nouveaux détails pour un pays spécifique
function saveCountryDetail($id, $label, $value)
{
    // Établir la connexion à la base de données
    $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Insérer de nouveaux détails pour un pays dans la base de données
    $req = $db->prepare('INSERT INTO countries_details (countries_id, label, value) VALUES (:id, :label, :value)');
    $req->bindParam(':id', $id);
    $req->bindParam(':label', $label);
    $req->bindParam(':value', $value);
    
    // Fermer la connexion à la base de données et retourner le résultat de l'exécution de la requête
    $db = null;
    return $req->execute();
}
