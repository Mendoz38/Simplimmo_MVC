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
                            <input name="title" type="text" class="form-control" placeholder="Super villa ..." value="<?= $_POST["title"] ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label>Prix du bien <small>(obligatoire)</small></label>
                            <input name="price" type="text" class="form-control" placeholder="En Dollars" value="<?= $_POST["price"] ?? ''; ?>">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Description détaillée :</label>
                            <textarea name="description" placeholder="Nombre de pièce, Etage, Déscriptif visuel..." class="form-control"></textarea>
                        </div>
                    
                    </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Adresse</label>
                        <input name="adresse" type="text" class="form-control" placeholder="Numéro de rue, Nom de la rue," value="<?= $_POST["adresse"] ?? ''; ?>">
                    </div>

                    </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Code postal</label>
                                <input name="codepostal" type="text" class="form-control" placeholder="Code Postal" value="<?= $_POST["codepostal"] ?? ''; ?>">
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
                                <label for="price-range">Nombre de salle de bain :</label>
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
                <input type='submit' class='btn btn-finish btn-primary ' name='submit' value='Publier' />
                <hr />
            </form>
        <?php } ?>

    </div>
</div>
<?php include('__includes/04_footer.php'); ?>