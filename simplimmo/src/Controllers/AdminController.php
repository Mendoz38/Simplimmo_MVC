<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/HomeRepository.php';

class AdminController
{
    use Response;

    public function index()
    {
        $homeRepository = new HomeRepository();

        $lastAnnonces = $homeRepository->getLast();

        $title = "Login!";

        $viewData = [
			'title' => $title,
            'annonces' => $lastAnnonces,
        ];

        $this->render('AdminTemplate', $viewData);
    }
}
