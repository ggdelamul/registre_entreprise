<?php
function connexion()
{
    try {
        $connect_pdo = new PDO("mysql:host=sql313.epizy.com;port=3306;dbname=epiz_33813667_registre_entreprise", "epiz_33813667", "rLdwD2wcUK");
        if (isset($connect_pdo)) {
            // echo "connexion OK";
        } else {
            echo "connexion échouée";
        }
    } catch (Exception $e) {
        echo "connexion impossible";
        var_dump($e);
    }
    return $connect_pdo;
}
function ajouter($connect)
{
    try {
        $data = [
            "nom" => $_POST["nom"],
            "activite" => $_POST["activite"],
            "siret" => $_POST["siret"],
            "date" => $_POST["date"],
        ];
        $insertSql = "insert into entreprise (raison_social,activite,siret,date_creation) values(:nom,:activite,:siret,:date)";
        $insert = $connect->prepare($insertSql);
        $insert->execute($data);
    } catch (Exception $e) {
        echo "probleme dans l'envoi de donnée";
        var_dump($e);
    }
}
function recupListe($connect)
{
    $rqtSql = "select * from entreprise";
    $rqtResult = $connect->prepare($rqtSql);
    $rqtResult->execute();
    $item_rqtResult = $rqtResult->fetchAll();
    return $item_rqtResult;
}
function afficheListe($liste)
{
    if (isset($liste) && ($liste != null)) {
        if (count($liste)) {
            foreach ($liste as $item) {
                $id = $item["id"];
                echo "<tr>";
                echo "<td>";
                echo $item["raison_social"] . "  " . $item["activite"];
                echo "</td>";
                echo "<td>";
                echo "<a href='require/main_index.php?id=$id'>supprimer</a>";
                echo " ";
                echo "<a href='modification.php?id=$id'>modifier</a>";
                echo " ";
                echo "<a href='entreprise.php?id=$id'>détails</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "pas de donnée";
        }
    } else {
        echo "pb recup donnee";
    }
}

function supprimer($connect, $id)
{
    $rqtSql = "delete from entreprise where id=$id";
    $rqtResult = $connect->prepare($rqtSql);
    $rqtResult->execute();
}
function recupDetails($connect, $id)
{
    $rqtSql = "select * from entreprise where id=$id";
    $rqtResult = $connect->prepare($rqtSql);
    $rqtResult->execute();
    $ligne = $rqtResult->fetch();
    return $ligne;
}
function afficherDetails($entreprise)
{
    echo "<tr>";
    echo "<td> Nom : " . $entreprise["raison_social"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo"<td> Activité : " . $entreprise["activite"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Siret : " . $entreprise["siret"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Date de création : " . $entreprise["date_creation"] . "</td>";
    echo "</tr>";
}
function modifier($connect, $nom, $activite, $siret, $date, $id)
{
    try {
        $updateSQL = "update ENTREPRISE set raison_social =  '$nom', activite = '$activite', siret = '$siret', date_creation = '$date' where id = '$id'";
        $update = $connect->prepare($updateSQL);
        $update->execute();
    } catch (Exception $e) {
        echo "probleme de persitance";
        var_dump($e);
    }
}
function showAlert($action,$couleur)
{
    echo
    '
    <div class="alert '.$couleur.' alert-dismissible" id="exampleAlert" role="alert">
    <strong>Vous avez '.$action.' une entreprise</strong> 
    <button type="button" class="icon-close" data-dismiss="alert" aria-label="Close">
      <a href="index.php"><span class="icon" aria-hidden="true"></span></a>
    </button>
    </div>
  
    ';
}

