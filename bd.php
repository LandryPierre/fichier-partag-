<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_prestataires;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : Impossible de se connecter à la base de données. '.$e->getMessage());
}


?>