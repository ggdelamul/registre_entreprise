<?php
require "includes/head.php";
require "includes/nav.php";
?>
    <main>
        <div class="container">
            <div class="row justify-content-center p-3 m-3">
                <h2 class="text-primary">Ajout d'une entreprise</h2>
            </div>
            <form action="require/main_ajout.php" method="post">
                <div class="form-group">
                    <label for="nom">Raison social</label><input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="activité">Activité</label><input type="text" name="activite" class="form-control">
                </div>
                <div class="form-group">
                    <label for="siret">SIRET</label><input type="text" name="siret" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Date de création</label><input type="date" name="date" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Ajoutez</button>
            </form>
        </div>
        <?php
        require "require/main_ajout.php";
        ?>
    </main>
    <?php
    require "includes/footer.php";
    ?>