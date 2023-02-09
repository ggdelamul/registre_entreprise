<?php
require "fonction.php";
$connect = connexion();
$id = $_GET["id"];
$entreprise = recupDetails($connect, $id);
