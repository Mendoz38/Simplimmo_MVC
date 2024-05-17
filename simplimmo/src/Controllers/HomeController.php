<?php
// 1er MVCR appelé
require_once __DIR__ . '/../Services/Response.php';
class HomeController
{
    use Response;

    public function index()
    {

        $annoncesRepository = new AnnoncesRepository();

        $lastAnnonces = $annoncesRepository->getLast();
        $count = $annoncesRepository->countAll();



        $title = "Welcome!";

        $viewData = [
            'annonces' => $lastAnnonces,
            'count' => $count,
            'title' => $title
        ];

        $this->render('HomePageTemplate', $viewData);
    }

    public function pageNotFound()
    {
        $this->render('404');
    }
}
