<?php



function getCountries()
{
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Selectionner tout les pays.
        $req = $db->prepare('SELECT * FROM countries');
        $req->execute();
        $country = $req->fetchAll(PDO::FETCH_ASSOC);
        $db = null;
        return $country;
}

function getCountry($id)
{
    $id = $_GET['id'];

        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Selectionner les détails d'un pays.
        $req = $db->prepare('SELECT * FROM countries WHERE id_countries = ' . $id);
        $req->execute();
        $oneCountry = $req->fetch();
        $db = null;
        return $oneCountry;
}

function getDetail($id)
{
        $id = $_GET['id'];
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Selectionner les détails d'un pays.
        $req = $db->prepare('SELECT * FROM countries_details WHERE countries_id = ' . $id);
        $req->execute();
        $detailCountry = $req->fetchAll(PDO::FETCH_ASSOC);
        $db = null;
        return $detailCountry;
}

function saveCountryDetail($id, $label, $value)
{
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // sauvegarder des nouveaux détails pour un pays.
        $req = $db->prepare('INSERT INTO countries_details (countries_id, label, value) VALUES (:id, :label, :value)');
        $req->bindParam(':id', $id);
        $req->bindParam(':label', $label);
        $req->bindParam(':value', $value);
        $db = null;
        return $req->execute();
}
