<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/HomeRepository.php';
require_once __DIR__ . '/../Repositories/UserRepository.php';

class AdminController
{
    use Response;

    public function index()
    {
        $homeRepository = new HomeRepository();
        $userRepository = new UserRepository();

        $lastAnnonces = $homeRepository->getLast();
        $allUsers = $userRepository->getAllUsers();
        $title = "Admin";

        $viewData = [
			'title' => $title,
            'annonces' => $lastAnnonces,
            'users' => $allUsers,
        ];

        $this->render('AdminTemplate', $viewData);
    }
}
