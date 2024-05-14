<?php
// 1er MVCR appelé
echo "1- Controller<br />";
require_once __DIR__ . '/../Services/Response.php';
class HomeController
{
    use Response;

    public function index()
    {

        $homeRepository = new HomeRepository();
        $lastAnnonces = $homeRepository->getLast();
        $count = $homeRepository->countAll();



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
