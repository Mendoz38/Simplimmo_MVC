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
        <h2><?= $count; ?> users</h2>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>Créer un compte : </h2>
                    <?php
                    if (!empty($successMessage)) {
                        echo '<div class="success"><h3 class="center">' . $successMessage . '</h3></div>';
                    }
                    if (!empty($errMessage)) {
                        echo '<div class="error"><h4 class="center">' . $errMessage . '</h4></div>';
                    }

                    if (empty($successMessage)) {
                    ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $_POST["name"] ?? ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="mail">Email</label>
                                <input type="text" class="form-control" id="mail" name="mail" value="<?= $_POST["mail"] ?? ''; ?>" required >
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?= $_POST["password"] ?? '' ; ?>" required >
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-default">Créer le compte</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>

    </div>
</div>



<?php include('__includes/04_footer.php'); ?>