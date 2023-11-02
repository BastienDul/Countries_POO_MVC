<?php

namespace App\Model; // Déclaration de l'espace de noms

use App\Model\Repository; // Importation de la classe Repository depuis l'espace de noms App\Model
use PDO; // Importation de la classe PDO

require_once ('Repository.php'); // Inclusion du fichier Repository.php

class CountryRepository extends Repository // Déclaration de la classe CountryRepository étendant la classe Repository
{
        public function getCountries()
        {
                $db = $this->connect(); // Établissement d'une connexion à la base de données en utilisant la méthode connect() de la classe mère

                // Sélectionner tous les pays.
                $req = $db->prepare('SELECT * FROM countries'); // Préparation d'une requête SQL pour sélectionner tous les pays
                $req->execute(); // Exécution de la requête
                
                // $db = null; // Fermeture de la connexion à la base de données (commentée)
                return $req->fetchAll(PDO::FETCH_ASSOC); // Renvoie de toutes les lignes de résultats de la requête sous forme de tableau associatif

        }
        
        function getCountry($id)
        {
                $db = $this->connect(); // Établissement d'une connexion à la base de données en utilisant la méthode connect() de la classe mère
        
                // Sélectionner les détails d'un pays.
                $req = $db->prepare('SELECT * FROM countries WHERE id_countries = ' . $id); // Préparation d'une requête SQL pour sélectionner les détails d'un pays en fonction de son identifiant
                $req->execute(); // Exécution de la requête
                // $db = null; // Fermeture de la connexion à la base de données (commentée)
                return $req->fetch(); // Renvoie de la première ligne de résultat de la requête

        }
        
}
