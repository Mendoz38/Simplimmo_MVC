
<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?= BASE_ASSETS; ?>/assets/img/logo.png" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <div class="button navbar-right">
                <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.4s"><a href="index.php" >Soumettre un bien</a></button>
            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="dropdown ymm-sw " data-wow-delay="0.1s"><a href="<?= BASE_URL ; ?>/" class="wow fadeInDown">Accueil</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?= BASE_URL ; ?>/Annonces">Voir les biens</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?= BASE_URL ; ?>/Contact">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->