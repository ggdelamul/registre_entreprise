<?php
require "fonction.php";
$connect = connexion();
$liste = recupListe($connect);
afficheListe($liste);

if (isset($_GET["id"])) {
    // echo $_GET["id"] . "👀👀👀";
    $id = $_GET["id"];
    supprimer($connect, $id);
    header("location:registre-app.great-site.net/showAlertDelete.php");
}
