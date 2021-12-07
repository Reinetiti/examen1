<?php
try {
    $connexion = new PDO('mysql:host=localhost;dbname=examen1','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>