
<?php
require "includes/head.php";
require "includes/nav.php";
?>
    <main>
        <?php
        /////recup des infos de la personne
        require "require/init_formulaire.php";
        $nom = $entreprise['raison_social'];
        $activite = $entreprise['activite'];
        $siret = $entreprise['siret'];
        $date = $entreprise['date_creation']
        ?>
        <div class="container">
         <div class="row justify-content-center p-3 m-3">
                <h2 class="text-primary">Modifiez les infos d'une entreprise</h2>
            </div>
            <form action="require/main_modif.php" method="post">
                <input type="hidden" value="<?php echo $_GET["id"] ?>" name="id">
                <div class="form-group">
                    <label for="nom">Raison social</label><input class="form-control" type="text" name="nom" value="<?php echo $nom ?>">
                </div>
                <div class="form-group">
                    <label for="activité">Activité</label><input class="form-control" type="text" name="activite" value="<?php echo $activite ?>">
                </div>
                <div class="from-group">
                    <label for="siret">SIRET</label><input class="form-control" type="text" name="siret" value="<?php echo $siret ?>">
                </div>
                <div class="form-group">
                    <label for="date">Date de création</label><input class="form-control" type="date" name="date" value="<?php echo $date ?>">
                </div>
                <button type="submit" class="btn btn-primary">Modifiez</button>
            </form>
        </div>
    </main>
    <?php
    require "includes/footer.php";
    ?>