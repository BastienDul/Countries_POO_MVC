<?php

namespace App\Model; // Déclaration de l'espace de noms

use PDO; // Importation de la classe PDO
use App\Model\Repository; // Importation de la classe Repository depuis l'espace de noms App\Model

require_once ('Repository.php'); // Inclusion du fichier Repository.php

class DetailsRepository extends Repository // Déclaration de la classe DetailsRepository étendant la classe Repository
{
    function getDetail($id)
    {
        $db = $this->connect(); // Établissement d'une connexion à la base de données en utilisant la méthode connect() de la classe mère

        // Sélectionner les détails d'un pays.
        $req = $db->prepare('SELECT * FROM countries_details WHERE countries_id = ' . $id); // Préparation d'une requête SQL pour sélectionner les détails d'un pays en fonction de son identifiant
        $req->execute(); // Exécution de la requête
        $db = null; // Fermeture de la connexion à la base de données (commentée)
        return $req->fetchAll(PDO::FETCH_ASSOC); // Renvoie de toutes les lignes de résultats de la requête sous forme de tableau associatif
    }

    function saveCountryDetail($id, $label, $value)
    {
        $db = $this->connect(); // Établissement d'une connexion à la base de données en utilisant la méthode connect() de la classe mère

        // Sauvegarder de nouveaux détails pour un pays.
        $req = $db->prepare('INSERT INTO countries_details (countries_id, label, value) VALUES (:id, :label, :value)'); // Préparation d'une requête SQL pour insérer de nouveaux détails pour un pays
        $req->bindParam(':id', $id); // Liaison de la variable :id à la variable $id
        $req->bindParam(':label', $label); // Liaison de la variable :label à la variable $label
        $req->bindParam(':value', $value); // Liaison de la variable :value à la variable $value
        $db = null; // Fermeture de la connexion à la base de données (commentée)
        return $req->execute(); // Exécution de la requête et renvoi d'un booléen indiquant le succès ou l'échec de l'exécution de la requête
    }
}
