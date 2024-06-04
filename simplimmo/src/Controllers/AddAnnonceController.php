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
            $rooms = $_POST['rooms'] ?? '';
            $baths = $_POST['baths'] ?? '';
            $type = $_POST['type'] ?? '';
            $description = $_POST['description'] ?? '';
            $swimmingpool = $_POST['swimmingpool'] ?? '';
            $garage = $_POST['garage'] ?? '';
            $parking = $_POST['parking'] ?? '';
            $terrasse = $_POST['terrasse'] ?? '';
            $elevator = $_POST['elevator'] ?? '';
            $box = $_POST['box'] ?? '';
            $level = $_POST['level'] ?? '';
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

        $this->render('AddAnnonceTemplate', $viewData);
    }
}
