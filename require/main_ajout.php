<?php
require "fonction.php";
$connect = connexion();
if (isset($_POST["nom"])) {
    // var_dump($_POST);
    ajouter($connect);
   header("location:../showAlertAjout.php");
}
