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
<div class="register-area">
    <div class="container">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="box-for overflow">
                    <div class="col-md-12 col-xs-12 login-blocks">
                        <h2>Se connecter : </h2>
                        <?php
                    if (!empty($successMessage)) {
                        ?>
                        <div class="success">
                            <h3 class="center"><?php echo $successMessage; ?></h3>
                        </div>
                        <div class="center">
                            <h3 class="center"><a href="Admin" class="center">Aller à l'admin</a></h3>
                        </div>

                        <?php
                    }
                    if (!empty($errMessage)) {
                        echo '<div class="error"><h4 class="center">' . $errMessage . '</h4></div>';
                    }

                    if (empty($successMessage)) {
                        echo $_SESSION['user_email'];
                    ?>
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
                    <?php
                    }
                    ?>
                        <br>
                    </div>

                </div>
            </div>

            <div class="col-md-3"></div>
    </div>
</div>

<?php include('__includes/04_footer.php'); ?>