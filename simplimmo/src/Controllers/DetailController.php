<?php


require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Services/debug.php';

class DetailController
{
    use Response;

    public function index($id)
    {
        $title = "Détail Annonce ";

        $annoncesRepository = new AnnoncesRepository();
        $annonce = $annoncesRepository->getAnnonceById($id) ;


        $viewData = [
			'title' => $title,
            'id' => $id,
            'annonces' => $annonce
        ];
        //pr($viewData);
        $this->render('DetailTemplate', $viewData);
    }
}
