<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/AnnoncesRepository.php';

class DeleteController
{
    use Response;

    public function index()
    {
        $annoncesRepository = new AnnoncesRepository();

    //    $delAnnonce = $annoncesRepository->delAnnonce();
        $title = "Suppression";

        $viewData = [
            'title' => $title,
        ];


        if ($_SESSION['user_email'] ?? '') {
            $this->render('DeleteTemplate', $viewData);
        } else {
            $this->render('404');
        }
    }

    
}
