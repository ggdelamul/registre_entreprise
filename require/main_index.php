<?php
require "fonction.php";
$connect = connexion();
$liste = recupListe($connect);
afficheListe($liste);

if (isset($_GET["id"])) {
    // echo $_GET["id"] . "👀👀👀";
    $id = $_GET["id"];
    supprimer($connect, $id);
    header("location:../showAlertDelete.php");
}
