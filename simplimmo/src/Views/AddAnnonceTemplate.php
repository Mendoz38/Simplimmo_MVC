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


                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Type de bien :</label>
                            <select required id="type" name="type" onchange="showDiv(this)" class="form-control">
                                <option value="">--Sélectionnez--</option>
                                <option value="Maison"   <?php if ($_POST['type'] ?? '' == 'Maison') { echo 'selected'; 	} ?> >Maison</option>
                                <option value="Appartement"   <?php if ($_POST['type'] ?? '' == 'Appartement') { echo 'selected'; 	} ?> >Appartement</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">
                            <label for="property-geo">Surface du bien en m² :</label>
                            <input required type="text" class="form-control" name="surface" value="<?= $_POST["surface"] ?? ''; ?>"><br />
                        </div>
                    </div>
                </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Description détaillée :</label>
                <textarea name="description" class="form-control" <?= $_POST["description"] ?? ''; ?> ></textarea>
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
                    <option <?php if ($_POST['city'] ?? '' == 'Lille') { echo 'selected'; 	} ?>  value="Lille"  >Lille</option>
                    <option <?php if ($_POST['city'] ?? '' == 'Paris') { echo 'selected'; 	} ?>  value="Paris"  >Paris</option>
                    <option <?php if ($_POST['city'] ?? '' == 'Grenoble') { echo 'selected'; 	} ?>  value="Grenoble"  >Grenoble</option>
                    <option <?php if ($_POST['city'] ?? '' == 'Toulon') { echo 'selected'; 	} ?>  value="Toulon"  >Toulon</option>
                </select>
            </div>
        </div>
        
        <!-- ----------------------Commun----------------- -->
        <div class="col-sm-12 padding-top-15 flex end">

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Nombre de pièces :</label>
                    <select id="rooms" name="rooms" class="form-control">
                        <option>--Sélectionnez--</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '1') { echo 'selected'; 	} ?> value="1">1</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '2') { echo 'selected'; 	} ?> value="2">2</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '3') { echo 'selected'; 	} ?> value="3">3</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '4') { echo 'selected'; 	} ?> value="4">4</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '5') { echo 'selected'; 	} ?> value="5">5</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '6') { echo 'selected'; 	} ?> value="6">6</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '7') { echo 'selected'; 	} ?> value="7">7</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '8') { echo 'selected'; 	} ?> value="8">8</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '9') { echo 'selected'; 	} ?> value="9">9</option>
                        <option <?php if ($_POST['rooms'] ?? '' == '10') { echo 'selected'; 	} ?> value="10">10</option>
                    </select>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Salles de bains :</label>
                    <select id="baths" name="baths" class="form-control">
                        <option>--Sélectionnez--</option>
                        <option <?php if ($_POST['baths'] ?? '' == '1') { echo 'selected'; 	} ?> value="1">1</option>
                        <option <?php if ($_POST['baths'] ?? '' == '2') { echo 'selected'; 	} ?> value="2">2</option>
                        <option <?php if ($_POST['baths'] ?? '' == '3') { echo 'selected'; 	} ?> value="3">3</option>
                        <option <?php if ($_POST['baths'] ?? '' == '4') { echo 'selected'; 	} ?> value="4">4</option>
                    </select>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Nombre d'étages :</label>
                    <select id="level" name="level" class="form-control">
                        <option >--Sélectionnez--</option>
                        <option <?php if ($_POST['level'] ?? '' == '1') { echo 'selected'; 	} ?> value="1">1</option>
                        <option <?php if ($_POST['level'] ?? '' == '1') { echo 'selected'; 	} ?> value="2">2</option>
                        <option <?php if ($_POST['level'] ?? '' == '1') { echo 'selected'; 	} ?> value="3">3</option>
                    </select>

                </div>
            </div>

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
                            <input type="checkbox" class="checkbox" id="parking" name="parking"  value="<?= $_POST["parking"] ?? ''; ?>">
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
                            <input type="checkbox" class="checkbox" id="elevator" name="elevator"  value="<?= $_POST["elevator"] ?? ''; ?>">
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

    </div>


    <input type='submit' class='btn btn-finish btn-primary ' name='submit' value='Publier' />
    <hr />
    </form>
<?php } ?>

</div>
</div>
<?php include('__includes/04_footer.php'); ?>