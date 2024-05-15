<?php 

include('__includes/01_head.php'); 
include('__includes/02_nav.php'); 

?>


        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Page de contact</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de l'entête de la page -->

        <!-- Zone de propriété -->
        <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"> 
                        <div class="" id="contact1">                        
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-map-marker"></i> Adresse</h3>
                                    <p>13/25 shibuia
                                        <br>Tokyo 
                                        <br>45Y 73J 
                                        <br>
                                        <strong>Japon</strong>
                                    </p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-phone"></i> Centre d'appels</h3>
                                    <p class="text-muted">Ce numéro est gratuit si vous appelez depuis
                                        la Grande-Bretagne, sinon nous vous conseillons d'utiliser le
                                        formulaire de communication électronique.</p>
                                    <p><strong>+33 555 444 333</strong></p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-envelope"></i> Support électronique</h3>
                                    <p class="text-muted">N'hésitez pas à nous envoyer un email ou à utiliser notre système de support par ticket électronique.</p>
                                    <ul>
                                        <li><strong><a href="mailto:">info@company.com</a></strong>   </li>
                                        <li><strong><a href="#">Ticketio</a></strong> - notre plateforme de support par ticket</li>
                                    </ul>
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                            <hr>
                            
                            <hr>
                            <h2>Formulaire de contact</h2>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Prénom</label>
                                            <input type="text" class="form-control" id="prénom">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Nom de famille</label>
                                            <input type="text" class="form-control" id="nom">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Sujet</label>
                                            <input type="text" class="form-control" id="sujet">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Envoyer le message</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>    
                </div>
               
            </div>
        </div>
        <div id="map" style="height: 400px;"></div>

        <?php include('__includes/04_footer.php'); ?>