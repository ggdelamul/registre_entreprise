<?php
require "fonction.php";
$connect = connexion();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $entreprise = recupDetails($connect, $id);
    // var_dump($entreprise);
    afficherDetails($entreprise);
}
