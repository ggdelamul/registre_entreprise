<?php
require "fonction.php";
$connect = connexion();
if (isset($_POST["nom"])) {
    // var_dump($_POST);
    ajouter($connect);
   header("location:registre-app.great-site.net/showAlertAjout.php");
}
