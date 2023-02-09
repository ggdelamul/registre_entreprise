<?php
require "includes/head.php";
require "includes/nav.php";
?>
    <main>
        <div class="container">
            <div class="row justify-content-center p-3 m-3">
                <h1 class="text-primary">Registre d'entreprise</h1>
            </div>
            <div class="row justify-content-center p-3 m-3 h-75 align-items-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Nom entreprise et activité</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require "require/main_index.php"
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php
    require "includes/footer.php";
    ?>