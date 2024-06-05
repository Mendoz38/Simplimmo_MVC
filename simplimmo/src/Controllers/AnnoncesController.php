<?php
// 1er MVCR appelé

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Services/debug.php';

class AnnoncesController
{
    use Response;

    public function index()
    {
        $title = "Annonces";

        $annoncesRepository = new AnnoncesRepository();
        $allAnnonces = $annoncesRepository->getAllAnnonces() ;
        $count = $annoncesRepository->countAll();

        $viewData = [
			'title' => $title,
            'count' => $count,
            'annonces' => $allAnnonces,
            //'searchannonces' => $searchAnnonces,
        ];
        //pr($viewData);
        $this->render('AnnoncesTemplate', $viewData);

        if ($_POST["search"] ?? '' == "search") {
            $searchData=[
                'price' => $_POST['price'] ?? '' ,
                'type' => $_POST['type'] ?? ''
            ];
            
            $searchAnnonces = $annoncesRepository->searchAnnonces($searchData);
        } else {
            $allAnnonces = $annoncesRepository->getAllAnnonces();
            $searchAnnonces = $allAnnonces;
        }
        $count = $annoncesRepository->countAll();

        $viewData = [
            'title' => $title,
            'count' => $count,
            'annonces' => $searchAnnonces,
        ];

        $this->render('AnnoncesTemplate', $viewData);

    
        

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
            $key = $_POST['key'] ?? '';
            /*  Continuer */
            echo "if";

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
                'key' => $key,
                'garden' => $garden
                /*  Continuer */

            ];

           // pr($data);
        } 
    }
}
