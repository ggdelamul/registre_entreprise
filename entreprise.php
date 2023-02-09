<?php
require "includes/head.php";
require "includes/nav.php";
?>
    <main>
        <div class="container justify-content-center">
         <div class="row justify-content-center p-3 m-3">
            <h2 class="text-primary">Détails d'entreprise</h2>
        </div>
        <div class="row  justify-content-center p-3 m-3">
            <table class="table table-striped">
                 <?php
                    require "require/main_detail.php";
                ?>
            </table>
        </div>
        </div>
       
    </main>
    <?php
    require "includes/footer.php";
    ?>