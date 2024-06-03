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

<div class="container ">
    <div class="tab-pane">
        <h3> <b>Publier </b> une annonce <br> </h3>
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Nom de l'annonce <small>(obligatoire)</small></label>
                            <input required name="title" type="text" class="form-control" placeholder="Super villa ..." value="<?= $_POST["title"] ?? ''; ?>">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Prix du bien <small>(obligatoire)</small></label>
                            <input required name="price" type="text" class="form-control" placeholder="3330000" value="<?= $_POST["price"] ?? ''; ?>">
                        </div>
                    </div>
                </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description détaillée :</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Adresse </label>
                <input name="adress" type="text" class="form-control" placeholder="Super villa ..." value="<?= $_POST["adress"] ?? ''; ?>">
            </div>

        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Code postal</label>
                <input name="cp" type="text" class="form-control" placeholder="75002" value="<?= $_POST["cp"] ?? ''; ?>">
            </div>
        </div>
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
        <div class="col-sm-12">

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Vente / Location :</label>
                    <select name="rent" class="selectpicker form-control">
                        <option> --Status-- </option>
                        <option>Vente </option>
                        <option>Location</option>
                        <option>Viagier</option>

                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Type de bien :</label>
                    <select required id="type" name="type" onchange="showDiv(this)" class="selectpicker form-control">
                        <option value="">--Sélectionnez--</option>
                        <option value="Maison">Maison</option>
                        <option value="Appartement">Appartement</option>
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
                    <label for="price-range">Nombre de salle de bain :</label>
                    <input type="text" class="span2" value="" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="[0]" id="min-baths" name="baths"><br />
                    <b class="pull-left color">1</b>
                    <b class="pull-right color">5</b>
                </div>
            </div>
            <div class="col-sm-4">

                <div class="form-group">
                    <label for="property-geo">Surface du bien en m² :</label>
                    <input required type="text" class="form-control" name="surface" value="185<?= $_POST["surface"] ?? ''; ?>"><br />
                </div>
            </div>
        </div>

        <!-- ----------------------House----------------- -->
        <div id="house" class="hidden">
            <div class="col-sm-12 padding-top-15">
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="checkbox-container">
                            <input type="checkbox" class="checkbox" id="swimmingpool" name="swimmingpool" onchange="toggleDiv('swimmingpool', 'swimmingpoolDiv')">
                            <label for="swimmingpool">Piscine</label>
                            <span id="swimmingpoolDiv" style="display: none;">
                                <input name="swimmingpool" type="text" placeholder="m²" class="form-control small_input" value="<?= $_POST["swimmingpool"] ?? ''; ?>">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="checkbox-container">
                            <input type="checkbox" class="checkbox" id="garden" name="garden" onchange="toggleDiv('garden', 'gardenDiv')">
                            <label for="garden">Jardin </label>
                            <span id="gardenDiv" style="display: none;">
                                <input name="garden" type="text" placeholder="m²" class="form-control small_input" value="<?= $_POST["garden"] ?? ''; ?>">
                            </span>
                        </div>
                        <span id="gardenDiv" style="display: none;">
                            m²
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------Appartment----------------- -->
        <div id="appartment" class="hidden">
            <div class="col-sm-12 padding-top-15">
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="checkbox-container">
                            <input type="checkbox" class="checkbox" id="parking" name="parking" value="1">
                            <label for="parking"> Parking </label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="checkbox-container">
                            <input type="checkbox" class="checkbox" id="terrasse" name="terrasse" onchange="toggleDiv('terrasse', 'terrasseDiv')">
                            <label for="terrasse"> Terrasse </label>
                            <span id="terrasseDiv" style="display: none;">
                                <input name="terrasse" type="text" placeholder="m²" class="form-control small_input" value="<?= $_POST["terrasse"] ?? ''; ?>">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="checkbox-container">
                            <input type="checkbox" class="checkbox" id="elevator" name="elevator" value="1">
                            <label for="elevator">Ascenseur </label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="checkbox-container">
                            <input type="checkbox" class="checkbox" id="box" name="box" onchange="toggleDiv('box', 'boxDiv')">
                            <label for="box">Box </label>
                            <span id="boxDiv" style="display: none;">
                                <input name="box" type="text" placeholder="m²" class="form-control small_input" value="<?= $_POST["box"] ?? ''; ?>">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------Commun----------------- -->
        <div id="commun">
            <div class="col-sm-12 padding-top-15">
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="checkbox-container">
                            <input type="checkbox" class="checkbox" id="garage" name="garage" onchange="toggleDiv('garage', 'garageDiv')">
                            <label for="garage">Garage </label>
                            <span id="garageDiv" style="display: none;">
                                <input name="garage" type="text" placeholder="m²" class="form-control small_input" value="<?= $_POST["garage"] ?? ''; ?>">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="checkbox-container">
                            <input name="level" type="text" placeholder="m²" class="form-control small_input" value="<?= $_POST["level"] ?? ''; ?>">
                            <label for="level">Niveaux </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="property-images">Choisir l'image :</label>
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
-->

    <input type='submit' class='btn btn-finish btn-primary ' name='submit' value='Publier' />
    <hr />
    </form>
<?php } ?>

</div>
</div>
<?php include('__includes/04_footer.php'); ?>