<?php

include('__includes/01_head.php');
include('__includes/02_nav.php');

?>
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Liste des annonces ( <?= $count ?> )</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->
<?php if ($_POST["search"] ?? '' == "search") { ?>
<h3 class="center">
    Résultats pour la recherche :<br />
<?php 
   if($_POST['type']) {echo $_POST['type'] ; }
   if($_POST['city']) {echo '| Ville : '.$_POST['city'] ; }
   if($_POST['price']) {echo '| Prix : '. $_POST['price'].' €' ; }
   if($_POST['rooms']) {echo '| Pièces : '. $_POST['rooms'] ; }
   if($_POST['baths']) {echo '| Salles de bain : '. $_POST['baths'] ; }
    
?>
</h3>
<?php } ?>

<!-- property area -->
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">
        <div class="row">
            <div class="col-md-9 padding-top-40 properties-page">
                <div class="section clear">
                    <div class="col-xs-10 page-subheader sorting pl0">
                        <ul class="sort-by-list">
                            <li class="active">
                                <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                    Date de la propriété <i class="fa fa-sort-amount-asc"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                    Prix de la propriété <i class="fa fa-sort-numeric-desc"></i>
                                </a>
                            </li>
                        </ul><!--/ .sort-by-list-->
                        <div class="items-per-page">
                            <label for="items_per_page"><b>Propriétés par page :</b></label>
                            <div class="sel">
                                <select id="items_per_page" name="per_page">
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="9">9</option>
                                    <option selected="selected" value="12">12</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                    <option value="60">60</option>
                                </select>
                            </div><!--/ .sel-->
                        </div><!--/ .items-per-page-->
                    </div>

                    <div class="col-xs-2 layout-switcher">
                        <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                        <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                    </div><!--/ .layout-switcher-->
                </div>

                <div class="section clear">
                    <div id="list-type" class="proerty-th">

                        <?php foreach ($annonces as $annonce) : ?>


                            <div class="col-sm-6 col-md-4 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="Detail/<?= $annonce->getId(); ?> "><img src="<?= BASE_ASSETS; ?>/assets/img/demo/property-<?= rand(1, 5); ?>.jpg"></a>
                                    </div>
                                    <div class="item-entry overflow">
                                        <h4 class="type"><a href="Detail/<?= $annonce->getId(); ?>"> <?= $annonce->getType(); ?> n°<?= $annonce->getId(); ?> </a></h4>
                                        <h5><a href="Detail/<?= $annonce->getId(); ?>"> <?= $annonce->getTitle(); ?> </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Surface :</b> <?= $annonce->getSurface(); ?> m² </span>
                                        <span class="proerty-price pull-right"> <?= $annonce->getPrice(); ?> €</span>
                                        <div class="property-icon">
                                            <img src="<?= BASE_ASSETS; ?>/assets/img/icon/bed.png"> ( <?= $annonce->getRooms(); ?> )|
                                            <img src="<?= BASE_ASSETS; ?>/assets/img/icon/shawer.png"> (2)
                                            <?php if ($annonce->getSwimmingpool()) {
                                            ?>
                                                | <img src="<?= BASE_ASSETS; ?>/assets/img/icon/picine.png"> (<?= $annonce->getSwimmingpool(); ?>m²)
                                            <?php
                                            } ?>
                                            <?php if ($annonce->getGarden()) {
                                            ?>
                                                | Jardin de <?= $annonce->getGarden(); ?>m²
                                            <?php
                                            } else {
                                                echo " | Pas de jardin";
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>


                    </div>
                </div>

            </div>
            <div class="col-md-3 pl0 padding-top-40">
                <div class="blog-asside-right pl0">
                    <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title"> Recherche Avancé </h3>
                        </div>
                        <div class="panel-body search-widget">
                            <form action=""  method="post" class=" form-inline">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input type="text"  name="key"  class="form-control" placeholder="Mot clé">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-6">

                                            <select id="lunchBegins" name="city"  class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Ville">

                                                <option>New york, CA</option>
                                                <option>Paris</option>
                                                <option>Casablanca</option>
                                                <option>Tokyo</option>
                                                <option>Marraekch</option>
                                                <option>kyoto , shibua</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">

                                            <select id="basic"  name="type"  class="selectpicker form-control">
                                                <option> -Statut- </option>
                                                <option>Location</option>
                                                <option>Achat</option>

                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range"> Prix (€):</label>
                                            <input type="text" name="price" class="span2" value="" data-slider-min="20000" data-slider-max="990000" data-slider-step="1000" data-slider-value="[20000,450000]" id="price-range"><br />
                                            <b class="pull-left color">20 000</b>
                                            <b class="pull-right color">990 000</b>
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="property-geo"> Surface (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="40" data-slider-max="12000" data-slider-step="100" data-slider-value="[40,12000]" id="property-geo"><br />
                                            <b class="pull-left color">40</b>
                                            <b class="pull-right color">12000</b>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range">Salles de bains :</label>
                                            <input type="text"  name="baths" class="span2" value="" data-slider-min="1" data-slider-max="3" data-slider-step="1" data-slider-value="[1,1]" id="min-baths"><br />
                                            <b class="pull-left color">1</b>
                                            <b class="pull-right color">3</b>
                                        </div>

                                        <div class="col-xs-6">
                                            <label for="property-geo">Pièces :</label>
                                            <input type="text"  name="rooms" class="span2" value="" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="[1,1]" id="min-bed"><br />
                                            <b class="pull-left color">1</b>
                                            <b class="pull-right color">10</b>

                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Cheminée</label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Double lavabo </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Piscine</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> 2 étages </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Buanderie </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Issue de secours</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Sentier de jogging </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Plafonds de 26 pieds </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Volets pare-tempête </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <input type="hidden"  name="search"  value="search"  class="form-control" >
                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input class="button btn largesearch-btn" value="Rechercher" type="submit">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include('__includes/04_footer.php'); ?>