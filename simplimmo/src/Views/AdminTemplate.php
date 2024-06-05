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
            <button class="navbar-btn nav-button login color_white "><a href="AddAnnonce"><i class="fa fa-plus"></i></a></button>
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
                        <td><a href="Edit/<?= $annonce->getId(); ?>"><i class="fa fa-edit"></i></a> </td>
                        <td><?= $annonce->getId(); ?></td>
                        <td><?= $annonce->getTitle(); ?></td>
                        <td><?= $annonce->getSurface(); ?> m²</td>
                        <td><?= $annonce->getPrice(); ?> €</td>
                        <td><?= $annonce->getRooms(); ?></td>
                        <td>
                            <a class="delete_com" data-emp-id="<?= $annonce->getId(); ?>" data-emp-reponse="<div class='alert alert-danger2' role='alert'>Attention, cette action est irreversible !!</div>" data-annonce-id="<?= $annonce->getId(); ?>" href="javascript:void(0)">
                                <button class="btn btn-rouge btn-fill btn-wd" type="button" title="Supprimer l'annonce">
                                    <span class="fa fa-trash-o"></span>
                                </button>
                            </a>
                        </td>
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
                        <td><a href="EditUser/<?= $user->getId(); ?>"><i class="fa fa-edit"></i></a> </td>
                        <td><?= $user->getId(); ?></td>
                        <td><?= $user->getName(); ?></td>
                        <td><?= $user->getMail(); ?></td>
                        <td>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="deleteModalLabel">Confirmation de Suppression de l'annonce <?= $annonce->getId(); ?></h4>
            </div>
            <div class="modal-body">
                <p id="deleteMessage">Êtes-vous sûr de vouloir supprimer cet élément ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Supprimer</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modal de la suppression -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var deleteButtons = document.querySelectorAll(".delete_com");

        deleteButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                var userId = this.getAttribute("data-emp-id");
                var ajaxReponse = this.getAttribute("data-emp-reponse");

                document.getElementById("deleteMessage").innerHTML = ajaxReponse;

                var annonceId = this.getAttribute("data-annonce-id");
                var modalTitle = document.getElementById("deleteModalLabel");
                modalTitle.innerHTML = "Confirmation de Suppression de l'annonce " + annonceId;

                $('#deleteModal').modal('show');

                document.getElementById("confirmDeleteBtn").addEventListener("click", function() {
                    delAnnonce(annonceId)
                });

                function delAnnonce(annonceId) {

                    var url = window.location.origin + "/public/Delete/" + annonceId;
                    console.log("URL de requête AJAX:", url); 
    
                    $.ajax({
                        type: "POST",
                        url:  url, 
                        success: function(response) {
            console.log("Réponse du serveur:", response);
                            if (response.success) {
                                window.location.reload(); 
                            } else {
                                //alert("zzzz", response.message); 
                                window.location.reload(); 
                            }
                        },
                        error: function(error) {
                            console.error("Erreur lors de la suppresseion :", error);
                            //alert("Erreur lors de la suppresseion.");
                                window.location.reload(); 
                        }
                    });
                }


            });
        });
    });
</script>
<?php include('__includes/04_footer.php'); ?>