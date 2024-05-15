<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/UserRepository.php';

class LoginController {
    use Response;

    public function index()  {
        $loginRepository = new LoginRepository();
        $userRepository = new UserRepository();

        $successMessage = '';
        $errMessage = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mail = $_POST['mail'];
            $password = $_POST['password'];

            if ($userRepository->checkEmailExists($mail)) {
                $hashedPassword = $userRepository->checkPassword($mail);

                if (password_verify($password, $hashedPassword)) {
                    $successMessage =  'Vous êtes maintenant connecté !'; 
                    
                    $_SESSION['user_email'] = $mail; 
                    $_SESSION['loggedin'] = true;
                } else {
                    $errMessage =  'Le mot de passe est invalide.';
                }

            } else {
                $errMessage =  'Utilisateur non connu';
            }
        }

        $title = "Login!";

        $viewData = [
			'title' => $title,
            'successMessage' => $successMessage,
            'errMessage' => $errMessage
        ];

        $this->render('LoginTemplate', $viewData);
    }
    
}
