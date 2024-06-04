<?php

// Load the controllers files
require __DIR__ . "/Controllers/HomeController.php";
require __DIR__ . "/Controllers/LoginController.php";
require __DIR__ . "/Controllers/RegisterController.php";
require __DIR__ . "/Controllers/AnnoncesController.php";
require __DIR__ . "/Controllers/DetailController.php";
require __DIR__ . "/Controllers/ContactController.php";
require __DIR__ . "/Controllers/AdminController.php";
require __DIR__ . "/Controllers/UserController.php";
require __DIR__ . "/Controllers/AddAnnonceController.php";
require __DIR__ . "/Controllers/EditController.php";


// Create the controller instances
$homeController = new HomeController();
$loginController = new LoginController();
$registerController = new RegisterController();
$annoncesController = new AnnoncesController();
$detailController = new DetailController();
$contactController = new ContactController();
$adminController = new AdminController();
$userController = new UserController();
$addannonceController = new AddAnnonceController();
$editController = new EditController();

$route = $_SERVER['REQUEST_URI'];
$segment = explode('/', $route); // explode l'URL entre les / pour isoler les segments. Dans mon cas /public/Detail/75 
// $segment[1] --> public
// $segment[2] --> Detail
// $segment[3] --> 75
$id = isset($segment[3]) ? $segment[3] : NULL; // associer l'id au $segment[3]

switch ($route) {
    case URL_HOMEPAGE:
        $annoncesController->index();
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
    case URL_EDIT_USER . '/' . $id:
        $userController->index($id);
        break;
    case URL_DETAIL . '/' . $id:
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
