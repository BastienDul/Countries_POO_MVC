<?php

require 'Controller/countryController.php';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "detail") {
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                if ($id != 0) {
                    afficherDetailPays();
                } else {
                    throw new Exception("ID non valide", 1);
                }
            } else {
                throw new Exception("ID inexistant", 2);
            }
        } elseif ($_GET['action'] == 'addCountryDetail') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $label = $_POST['label'];
                $value = $_POST['value'];
                if ($id != 0) {
                    addCountryDetail($id, $label, $value);
                }
            }
        } else {
            throw new Exception("Action non valide", 3);
        }
    }  else {
        afficherPays();
    }
}  catch (Exception $e) {
    $msgErreur = $e->getMessage();
    $file = basename($e->getFile());  
    $line = $e->getLine();
    require('View/vueErreur.php');
}


