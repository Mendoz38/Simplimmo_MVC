<?php

require_once __DIR__ . '/../Services/Response.php';

class RegisterController
{
    use Response;

    public function index()
    {
        
        $registerRepository = new RegisterRepository();
        $formData = $_POST;

        //echo "<br />Mail: " . $formData['mail'] . "<br>";

        $count = $registerRepository->countUser();
//        $addUser = $registerRepository->addUser($userData);


        $title = "Register!";

        $viewData = [
            'count' => $count,
			'title' => $title
        ];

        $this->render('RegisterTemplate', $viewData);
    }
    
    public function pageNotFound()
    {
        $this->render('404');
    }

}
/*
        $registerRepository = new RegisterRepository();
        $registerData = $_POST;

        echo "<br />Mail: " . $registerData['mail'] . "<br>";

        // Hasher le mot de passe
        $registerData['password'] = md5($registerData['password']);

        // Vérifier si l'email existe déjà
        if ($registerRepository->checkEmailExists($registerData['mail'])) {
            echo "Cet email est déjà utilisé. Veuillez choisir un autre.";
            $formController = new RegisterRepository();
            $this->render('RegisterTemplate', $viewData);
            return;
        } else {
            $addUser = $registerRepository->addUser($registerData);
        }
*/