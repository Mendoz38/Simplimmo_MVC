<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Services/debug.php';

class AddAnnonceController
{
    use Response;

    public function index()
    {
        $title = "Ajouter une annonce";

        $addAnnonceRepository = new AddAnnonceRepository() ;

        $successMessage = '';
        $errMessage = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $price = $_POST['price'] ?? '';
            $adress = $_POST['adress'] ?? '';
            $city = $_POST['city'] ?? '';
            $cp = $_POST['cp'] ?? '';
            $surface = $_POST['surface'] ?? '';
            $rooms = isset($_POST['rooms']) && $_POST['rooms'] !== '' ? (INT)$_POST['rooms'] : NULL;
            $baths = isset($_POST['baths']) && $_POST['baths'] !== '' ? (INT)$_POST['baths'] : NULL;
            $type = $_POST['type'] ?? '';
            $description = $_POST['description'] ?? '';
            $swimmingpool = $_POST['swimmingpool'] ?? '';
            $garage = $_POST['garage'] ?? '';
            $parking = $_POST['parking'] ?? '';
            $terrasse = $_POST['terrasse'] ?? '';
            $elevator = $_POST['elevator'] ?? '';
            $box = isset($_POST['box']) && $_POST['box'] !== '' ? (INT)$_POST['box'] : NULL;
            $level = isset($_POST['level']) && $_POST['level'] !== '' ? (INT)$_POST['level'] : NULL;
            $garden = $_POST['garden'] ?? '';
            /*  Continuer */

            $data = [
                'title' => $title,
                'price' => $price,
                'adress' => $adress,
                'city' => $city,
                'cp' => $cp,
                'surface' => $surface,
                'rooms' => $rooms,
                'baths' => $baths,
                'type' => $type,
                'description' => $description,
                'swimmingpool' => $swimmingpool,
                'garage' => $garage,
                'parking' => $parking,
                'terrasse' => $terrasse,
                'elevator' => $elevator,
                'box' => $box,
                'level' => $level,
                'garden' => $garden
                /*  Continuer */

            ];

           // pr($data);

            if ($addAnnonceRepository->addAnnonce($data)) {
                $successMessage = 'Annonce créée !';
            } else {
                $errMessage = 'Une erreur est survenue lors de la création de l\'annonce.';
            }
        }


        $viewData = [
            'title' => $title,
            'successMessage' => $successMessage,
            'errMessage' => $errMessage,
        ];

        if ($_SESSION['user_email'] ?? '') {
            $this->render('AddAnnonceTemplate', $viewData);
        } else {
            $this->render('404');
        }
    }
}
