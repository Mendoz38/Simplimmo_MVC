<?php

require_once __DIR__ . '/../Services/Response.php';

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
        ];

        $this->render('AnnoncesTemplate', $viewData);
    }
}
