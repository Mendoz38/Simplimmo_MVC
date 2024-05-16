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

    <div class="admin_annonces">
        
    <div class="flex">
        <h2 class="center">Liste des annonces</h2>
        <button class="navbar-btn nav-button login color_white "><a href="AddAnnonce" ><i class="fa fa-plus"></i></a></button>
    </div>
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
                        <td><?= $annonce->getSurface() ; ?> m²</td>
                        <td><?= $annonce->getPrice() ; ?> €</td>
                        <td><?= $annonce->getRooms() ; ?></td>
                        <td><i class="fa fa-trash"></i> </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
            </table>

    </div>

    <hr />
    <div class="admin_annonces">
        <h2 class="center">Liste des utilisateurs</h2>
        <table class="tablesorter centre">
            <thead>
                <tr class="centre">
                    <th class="centre">Edit </th>
                    <th class="centre">Id </th>
                    <th class="centre">Nom </th>
                    <th class="centre">Email </th>
                    <th class="centre">Supprimer</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><a href="EditUser/<?= $user->getId() ; ?>"><i class="fa fa-edit"></i></a> </td>
                        <td><?= $user->getId() ; ?></td>
                        <td><?= $user->getName() ; ?></td>
                        <td><?= $user->getMail() ; ?></td>
                        <td><i class="fa fa-trash"></i> </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
            </table>

    </div>

</div>
<?php include('__includes/04_footer.php'); ?>