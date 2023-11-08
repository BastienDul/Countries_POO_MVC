<?php

namespace App\Model; // Déclaration de l'espace de noms
use PDO; // Importation de la classe PDO

abstract class Repository { // Déclaration de la classe abstraite Repository
    protected function connect(){ // Déclaration d'une méthode protégée connect()
        $db = new PDO('mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8', 'root', ''); // Connexion à la base de données MySQL en utilisant PDO avec l'hôte 'localhost', la base de données 'db_countries', le port '3306', le jeu de caractères 'utf8', et l'identifiant et le mot de passe 'root'
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configuration du mode d'erreur pour PDO pour générer des exceptions en cas d'erreur de requête

        return $db; // Retourne l'objet de connexion à la base de données
    }
}
