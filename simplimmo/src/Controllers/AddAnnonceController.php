<?php

require_once __DIR__ . '/../Services/Response.php';

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
            $surface = $_POST['surface'] ?? '';
            $description = $_POST['description'] ?? '';
            /*  Continuer */

            $data = [
                'title' => $title,
                'price' => $price,
                'surface' => $surface,
                'description' => $description
                /*  Continuer */

            ];


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
