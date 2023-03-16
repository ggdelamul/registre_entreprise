<?php
require "fonction.php";
$connect = connexion();
///////////////////modif de donnee
var_dump($_POST["nom"] . " " . $_POST["prenom"] . " " . $_POST["id"]);
modifier($connect, $_POST["nom"], $_POST["activite"], $_POST["siret"], $_POST["date"], $_POST["id"]);
header("location:registre-app.great-site.net/showAlertModif.php");
