<?php
include('__includes/01_head.php');
include('__includes/02_nav.php');
include('__includes/03_slider.php');

?>



<!-- property area -->
<div class="container">
    <div class="row">
        <h3 class="center">Il y a actuellement <?= $count ?> offres disponibles</h3>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
echo "Vous avez recherché :". $_POST['type'] . " à " .$_POST['lieu'];
}
?> 
       <div class="col-md-12  padding-top-40 properties-page">
            <div class="col-md-12 ">
                <?php include('__includes/annonces/filter.php'); ?>
                <div class="col-md-12 ">
                    <div id="list-type" class="proerty-th">

                    
                        <?php foreach ($annonces as $annonce) : ?>

                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="Detail/<?= $annonce->getId() ; ?> "><img src="<?= BASE_ASSETS; ?>/assets/img/demo/property-<?= rand(1, 5); ?>.jpg"></a>
                                    </div>
                                    <div class="item-entry overflow">
                                        <h5><a href="detail.php"> <?= $annonce->getTitle() ; ?>  </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Surface :</b> <?= $annonce->getSurface() ; ?>  m² </span>
                                        <span class="proerty-price pull-right"> <?= $annonce->getPrice() ; ?>  €</span>
                                        <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                        <div class="property-icon">
                                            <img src="<?= BASE_ASSETS; ?>/assets/img/icon/bed.png"> (  <?= $annonce->getRooms() ; ?>  )|
                                            <img src="<?= BASE_ASSETS; ?>/assets/img/icon/shawer.png"> (2)|
                                            <img src="<?= BASE_ASSETS; ?>/assets/img/icon/cars.png"> (1)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pull-right">
                        <div class="pagination">
                            <ul>
                                <li><a href="#">Précèdent</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Suivant</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('__includes/04_footer.php'); ?>