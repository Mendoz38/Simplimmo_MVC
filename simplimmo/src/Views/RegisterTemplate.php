<?php
include('__includes/01_head.php');
include('__includes/02_nav.php');
?>

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Créer un compte </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area">
    <div class="container">
        <h2><?= $count ; ?>  users</h2>
        <?php /*
                    $formController = new Register_controller();
                        */
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           // $formController->processForm();
        } else {
        ?>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="box-for overflow">
                    <div class="col-md-12 col-xs-12 register-blocks">
                        <h2>Créer un compte : </h2>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="name" name="name" required value="Nom">
                            </div>
                            <div class="form-group">
                                <label for="mail">Email</label>
                                <input type="text" class="form-control" id="mail" name="mail" required value="ced@ced.fr">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required value="123456">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-default">Créer le compte</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        <?php

        }
        ?>

    </div>
</div>



<?php include('__includes/04_footer.php'); ?>