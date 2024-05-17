<?php

// Load the controllers files
require __DIR__ . "/Controllers/HomeController.php";
require __DIR__ . "/Controllers/LoginController.php";
require __DIR__ . "/Controllers/RegisterController.php";
require __DIR__ . "/Controllers/AnnoncesController.php";
require __DIR__ . "/Controllers/DetailController.php";
require __DIR__ . "/Controllers/ContactController.php";
require __DIR__ . "/Controllers/SuccessController.php";
require __DIR__ . "/Controllers/AdminController.php";
require __DIR__ . "/Controllers/AddAnnonceController.php";
require __DIR__ . "/Controllers/EditController.php";


// Create the controller instances
$homeController = new HomeController();
$loginController = new LoginController();
$registerController = new RegisterController();
$annoncesController = new AnnoncesController();
$detailController = new DetailController();
$contactController = new ContactController();
$successController = new SuccessController();
$adminController = new AdminController();
$addannonceController = new AddAnnonceController();
$editController = new EditController();

// Get the current request URI to get the route asked for by the user
$route = $_SERVER['REQUEST_URI'];
// Use a switch/case to match the request and the controller based on the URI
switch ($route) {
    case URL_HOMEPAGE: // If the URI matches the homepage
        $homeController->index();
        break;
    case URL_LOGIN:
        $loginController->index();
        break;
    case URL_REGISTER:
        $registerController->index();
        break;
    case URL_ANNONCES:
        $annoncesController->index();
        break;
    case URL_DETAIL:
        $detailController->index($id);
        break;
    case URL_CONTACT:
        $contactController->index();
        break;
    case URL_SUCCESS:
        $successController->index();
        break;
    case URL_ADMIN:
        $adminController->index();
        break;
    case URL_ADDANNONCE:
        $addannonceController->index();
        break;
    case URL_EDIT:
        $editController->index();
        break;
    default: // Default, if no route is found
        $homeController->pageNotFound();
}
