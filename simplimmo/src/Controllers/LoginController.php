<?php

require_once __DIR__ . '/../Services/Response.php';
require_once __DIR__ . '/../Repositories/UserRepository.php';

class LoginController
{
    use Response;

    public function index()
    {
        $loginRepository = new LoginRepository();
        $userRepository = new UserRepository();

        $successMessage = '';
        $errMessage = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mail = $_POST['mail'];
            $password = $_POST['password'];

            if ($userRepository->checkEmailExists($mail)) {
                $hashedPassword = $userRepository->checkPassword($mail);
                
                echo  "<br />password1".$password;
               // echo  "<br />password2".$hashedPassword;

                if (password_verify($password, $hashedPassword)) {
                    echo 'Le mot de passe est valide !';
                } else {
                    echo 'Le mot de passe est invalide.';
                }

            } else {
                echo'Utilisateur non trouvé';
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
    
    public function pageNotFound()
    {
        $this->render('404');
    }

}
