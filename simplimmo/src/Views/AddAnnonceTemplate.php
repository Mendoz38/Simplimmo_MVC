<?php
include('__includes/01_head.php');
include('__includes/02_nav.php');
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

        <div class="wizard-container">

            <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                <form action="" method="">
                    <div class="wizard-header">
                        <h3>
                            <b>Publier </b> une annonce <br>
                        </h3>
                    </div>

                    <ul>
                        <li><a href="#step1" data-toggle="tab">Etape 1 </a></li>
                        <li><a href="#step2" data-toggle="tab">Etape 2 </a></li>
                        <li><a href="#step3" data-toggle="tab">Etape 3 </a></li>
                        <li><a href="#step4" data-toggle="tab">Validation </a></li>
                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane" id="step1">
                            <div class="row p-b-15  ">
                                <div class="col-sm-4 col-sm-offset-1">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img src="assets/img/default-property.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                                            <input type="file" id="wizard-picture">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nom de l'annonce <small>(obligatoire)</small></label>
                                        <input name="title" type="text" class="form-control" placeholder="Super villa ...">
                                    </div>

                                    <div class="form-group">
                                        <label>Prix du bien <small>(obligatoire)</small></label>
                                        <input name="propertyprice" type="text" class="form-control" placeholder="3330000">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  End step 1 -->

                        <div class="tab-pane" id="step2">
                            <h4 class="info-text"> Descriptif de l'annonoce </h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Description détaillée :</label>
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Ville :</label>
                                            <select name="city" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Selectionnez votre ville">
                                                <option>Lille</option>
                                                <option>Paris</option>
                                                <option>Grenoble</option>
                                                <option>Toulon</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Vente / Location :</label>
                                            <select name="rent" class="selectpicker form-control">
                                                <option> -Status- </option>
                                                <option>Vente </option>
                                                <option>Location</option>
                                                <option>Viagier</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Type de bien :</label>
                                            <select name="type" class="selectpicker form-control">
                                                <option> -Status- </option>
                                                <option>Maison </option>
                                                <option>Appartement</option>
                                                <option>Garage</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 padding-top-15">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-geo">Nombre de chambres :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="[0]" id="min-bed" name="rooms"><br />
                                            <b class="pull-left color">0</b>
                                            <b class="pull-right color">10</b>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">

                                        <div class="form-group">
                                            <label for="price-range">Min baths :</label>
                                            <input type="text" class="span2" value="" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="[0]" id="min-baths" name="baths"><br />
                                            <b class="pull-left color">1</b>
                                            <b class="pull-right color">5</b>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">

                                        <div class="form-group">
                                            <label for="property-geo">Surface du bien en m² :</label>
                                            <input type="text" class="form-control" name="surface"><br />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 padding-top-15">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Piscine
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2 Stories
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Emergency Exit
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Fire Place
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 padding-bottom-15">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Laundry Room
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Jog Path
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Ceilings
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Dual Sinks
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- End step 2 -->

                        <div class="tab-pane" id="step3">
                            <h4 class="info-text">Give us somme images and videos ? </h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="property-images">Chose Images :</label>
                                        <input class="form-control" type="file" id="property-images">
                                        <p class="help-block">Select multipel images for your property .</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="property-video">Property video :</label>
                                        <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  End step 3 -->


                        <div class="tab-pane" id="step4">
                            <h4 class="info-text"> Finished and submit </h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="">
                                        <p>
                                            <label><strong>Terms and Conditions</strong></label>
                                            By accessing or using GARO ESTATE services, such as
                                            posting your property advertisement with your personal
                                            information on our website you agree to the
                                            collection, use and disclosure of your personal information
                                            in the legal proper manner
                                        </p>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" /> <strong>Accept termes and conditions.</strong>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  End step 4 -->

                    </div>

                    <div class="wizard-footer">
                        <div class="pull-right">
                            <input type='button' class='btn btn-next btn-primary' name='next' value='Next' />
                            <input type='button' class='btn btn-finish btn-primary ' name='finish' value='Finish' />
                        </div>

                        <div class="pull-left">
                            <input type='button' class='btn btn-previous btn-default' name='previous' value='Previous' />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
            <!-- End submit form -->
        </div>



</div>
<?php include('__includes/04_footer.php'); ?>