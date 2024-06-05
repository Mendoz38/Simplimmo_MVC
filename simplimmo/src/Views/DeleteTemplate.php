<?php
include('__includes/01_head.php');
include('__includes/02_nav.php');

$request = $_SERVER['REQUEST_URI'];
$segments = explode('/', trim($request, '/'));




?>

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Administration </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area">

    <div class="admin_annonces">

        <div class="flex">
            <h2 class="center">Voulez-vous supprimer l'annonce <?php echo $segments[2] ; ?> </h2>
            <a href=""></a>
        </div>
    </div>
</div>


<?php include('__includes/04_footer.php'); ?>