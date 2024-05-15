<?php

require_once __DIR__ . '/../Services/Response.php';

class RegisterController
{
    use Response;

    public function index()
    {
        $registerRepository = new RegisterRepository();
        $count = $registerRepository->countUser();

        $successMessage = '';
        $errMessage = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $surname = $_POST['surname'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $mail = $_POST['mail'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $token = bin2hex(random_bytes(16));
            $status = 1; // A gèrer par la suite
            $date_create = date('Y-m-d H:i:s');
            $date_modif = null;

            $registerData = [
                'name' => $name,
                'surname' => $surname,
                'phone' => $phone,
                'mail' => $mail,
                'password' => $password,
                'token' => $token,
                'status' => $status,
                'date_create' => $date_create,
                'date_modif' => $date_modif
            ];

            if ($registerRepository->checkEmailExists($mail)) {
                $errMessage = "Cet email existe déjà.";
            } else {
                if ($registerRepository->addUser($registerData)) {
                    $successMessage = 'Le compte a été créé avec succès.';
                } else {
                    $errMessage = 'Une erreur est survenue lors de la création du compte.';
                }
            }
            
        }
        $viewData = [
            'count' => $count,
            'successMessage' => $successMessage,
            'errMessage' => $errMessage
        ];

        $this->render('RegisterTemplate', $viewData);
    }
    
    public function pageNotFound()
    {
        $this->render('404');
    }

}