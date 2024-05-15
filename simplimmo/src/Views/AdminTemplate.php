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
    <div class="flex">
        <button class="navbar-btn nav-button login color_white "><a href="AddAnnonce" >Créer une annonce</a></button>
    </div>

    <div class="admin_annonces">
        <table class="tablesorter centre">
            <thead>
                <tr class="centre">
                    <th class="centre">Edit </th>
                    <th class="centre">Id </th>
                    <th class="centre">Titre </th>
                    <th class="centre">Surface </th>
                    <th class="centre">Prix </th>
                    <th class="centre">Chambres </th>
                    <th class="centre">Supprimer</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($annonces as $annonce) : ?>
                    <tr>
                        <td><a href="Edit/<?= $annonce->getId() ; ?>"><i class="fa fa-edit"></i></a> </td>
                        <td><?= $annonce->getId() ; ?></td>
                        <td><?= $annonce->getTitle() ; ?></td>
                        <td><?= $annonce->getSurface() ; ?></td>
                        <td><?= $annonce->getPrice() ; ?></td>
                        <td><?= $annonce->getRooms() ; ?></td>
                        <td><i class="fa fa-trash"></i> </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
            </table>




    </div>

</div>
<?php include('__includes/04_footer.php'); ?>