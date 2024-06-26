<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/AnnoncesRepository.php';
require_once __DIR__ . '/../Repositories/UserRepository.php';

class AdminController
{
    use Response;

    public function index()
    {
        $annoncesRepository = new AnnoncesRepository();
        $userRepository = new UserRepository();

    //    $delAnnonce = $annoncesRepository->delAnnonce();
        $lastAnnonces = $annoncesRepository->getLast();
        $allUsers = $userRepository->getAllUsers();
        $title = "Admin";

        $viewData = [
            'title' => $title,
            'annonces' => $lastAnnonces,
            'users' => $allUsers,
        ];


        if ($_SESSION['user_email'] ?? '') {
            $this->render('AdminTemplate', $viewData);
        } else {
            $this->render('404');
        }
    }

    
}
