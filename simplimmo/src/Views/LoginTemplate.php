<?php
include('__includes/01_head.php');
include('__includes/02_nav.php');
?>

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Se connecter </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
        } else {
        ?>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="box-for overflow">
                    <div class="col-md-12 col-xs-12 login-blocks">
                        <h2>Se connecter : </h2>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="mail">Email</label>
                                <input type="text" class="form-control" id="email" name="mail">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-default"> Se connecter</button>
                            </div>
                        </form>
                        <br>
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