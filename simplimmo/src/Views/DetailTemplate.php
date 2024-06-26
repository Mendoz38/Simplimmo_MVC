
<?php 
include('__includes/01_head.php'); 
include('__includes/02_nav.php'); 

?>

        <!-- Zone des biens -->
            <div class="container">   

                <div class="clearfix padding-top-40" >
                    <h2>Date de parution : <?= $annonces[0]->getDateCrea() ; ?></h2>

                    <div class="col-md-8 single-property-content prp-style-2">
                        <div class="">
                            <div class="row">
                                <div class="light-slide-item">            
                                    <div class="clearfix">
                                        <div class="favorite-and-print">
                                            <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                                <i class="fa fa-star-o"></i>
                                            </a>
                                            <a class="printer-icon " href="javascript:window.print()">
                                                <i class="fa fa-print"></i> 
                                            </a>
                                        </div> 

                                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                            <li data-thumb="<?= BASE_ASSETS; ?>/assets/img/property-1/property1.jpg"> 
                                                <img src="<?= BASE_ASSETS; ?>/assets/img/property-1/property1.jpg" />
                                            </li>
                                            <li data-thumb="<?= BASE_ASSETS; ?>/assets/img/property-1/property2.jpg"> 
                                                <img src="<?= BASE_ASSETS; ?>/assets/img/property-1/property3.jpg" />
                                            </li>
                                            <li data-thumb="<?= BASE_ASSETS; ?>/assets/img/property-1/property3.jpg"> 
                                                <img src="<?= BASE_ASSETS; ?>/assets/img/property-1/property3.jpg" />
                                            </li>
                                            <li data-thumb="<?= BASE_ASSETS; ?>/assets/img/property-1/property4.jpg"> 
                                                <img src="<?= BASE_ASSETS; ?>/assets/img/property-1/property4.jpg" />
                                            </li>                                         
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-property-wrapper">

                                <div class="section">
                                    <h4 class="s-property-title">Description</h4>
                                    <div class="s-property-content">
                                        <p><?= $annonces[0]->getDescription() ; ?>  </p>
                                    </div>
                                </div>
                                <!-- Fin de la zone de description -->

                                <div class="section additional-details">

                                    <h4 class="s-property-title">Détails supplémentaires</h4>

                                    <ul class="additional-details-list clearfix">
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Bord de l'eau</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Oui</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Construit en</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2003</span>
                                        </li>
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Stationnement</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2 places ou plus, stationnement couvert, stationnement avec voiturier</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Bord de l'eau</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Oui</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Vue</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Vue intracôtière, vue directe</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Description du bord de l'eau :</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Front intracôtier, accès à l'océan</span>
                                        </li> 

                                    </ul>
                                </div>  
                                <!-- Fin de la zone de détails supplémentaires -->

                                <div class="section property-features">      

                                    <h4 class="s-property-title">Caractéristiques</h4>                            
                                    <ul>
                                        <li><a href="properties.html">Piscine</a></li>   
                                        <li><a href="properties.html">3 étages</a></li>
                                        <li><a href="properties.html">Climatisation centrale</a></li>
                                        <li><a href="properties.html">Chemin de jogging 2</a></li>
                                        <li><a href="properties.html">2 pelouses</a></li>
                                        <li><a href="properties.html">Piste cyclable</a></li>
                                    </ul>

                                </div>
                                <!-- Fin de la zone de caractéristiques -->

                                <div class="section property-video"> 
                                    <h4 class="s-property-title">Vidéo de la propriété</h4> 
                                    <div class="video-thumb">
                                        <a class="video-popup" href="yout" title="Visite virtuelle">
                                            <img src="<?= BASE_ASSETS; ?>/assets/img/property-video.jpg" class="img-responsive wp-post-image" alt="Extérieur">            
                                        </a>
                                    </div>
                                </div>
                                <!-- Fin de la zone vidéo -->

                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right property-style2">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">
                                        <div class="single-property-header">                                          
                                            <h1 class="property-title"><?= $annonces[0]->getTitle() ; ?> </h1>
                                            <span class="property-price"> <?= $annonces[0]->getprice() ; ?> €</span>
                                        </div>

                                        <div class="property-meta entry-meta clearfix ">   



                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info icon-area">
                                                    <img src="<?= BASE_ASSETS; ?>/assets/img/icon/room-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Surface</span>
                                                    <span class="property-info-value"> <?= $annonces[0]->getSurface() ; ?><b class="property-info-unit"> m²</b></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bed">
                                                    <img src="<?= BASE_ASSETS; ?>/assets/img/icon/bed-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label"><?= $annonces[0]->getRooms() ; ?> Pièces</span>
                                                </span>
                                            </div>


                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="<?= BASE_ASSETS; ?>/assets/img/icon/shawer-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label"><?= $annonces[0]->getBaths() ; ?> Salle de bains</span>
                                                </span>
                                            </div>   
                                            
                                            <?php if ($annonces[0]->getParking() ) { ?>
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <img src="<?= BASE_ASSETS; ?>/assets/img/icon/cars-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Garage</span>
                                                    <span class="property-info-value"><?= $annonces[0]->getParking() ; ?> m²</span>
                                                </span>
                                            </div>
                                        <?php } ?>


                                            <?php if ($annonces[0]->getGarden() ) { ?>
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="<?= BASE_ASSETS; ?>/assets/img/icon/room-orange.png">
                                                </span>

                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Jardin de  <?= $annonces[0]->getGarden() ; ?> m²</span>
                                                </span>
                                            </div>
                                        <?php } ?>


                                            <?php if ($annonces[0]->getswimmingpool() ) { ?>
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="<?= BASE_ASSETS; ?>/assets/img/icon/picine-orange.png">
                                                </span>

                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Piscine de  <?= $annonces[0]->getswimmingpool() ; ?> m²</span>
                                                </span>
                                            </div>
                                        <?php } ?>


                                        </div>
                                        <div class="dealer-section-space">
                                            <span>Agent en charge du bien</span>
                                        </div>
                                        <div class="clear">
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    <img src="<?= BASE_ASSETS; ?>/assets/img/client-face1.png" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href="">Nathan James</a>
                                                    <span>Agent immobilier</span>        
                                                </h3>
                                                <div class="dealer-social-media">
                                                    <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="facebook" target="_blank" href="">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                        <fieldset >
                                            <div class="row">
                                                <div class="col-xs-12 center">  
                                                <button class="navbar-btn nav-button wow center login" data-wow-delay="0.4s"><a href="<?= BASE_URL ; ?>/Contact" >Faire une offre</a></button>
                                                </div>  
                                            </div>
                                        </fieldset> 


                        </aside>
                    </div>

                </div>

            </div>

        <?php include('__includes/04_footer.php'); ?>