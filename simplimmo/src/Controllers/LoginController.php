<?php

require_once __DIR__ . '/../Services/Response.php';

class LoginController
{
    use Response;

    public function index()
    {
        $title = "Login!";

        $viewData = [
			'title' => $title
        ];

        $this->render('LoginTemplate', $viewData);
    }
    
    public function pageNotFound()
    {
        $this->render('404');
    }

}
