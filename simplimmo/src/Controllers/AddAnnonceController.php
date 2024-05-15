<?php

require_once __DIR__ . '/../Services/Response.php';

class AddAnnonceController
{
    use Response;

    public function index()
    {
        $title = "Contact";

        $viewData = [
			'title' => $title
        ];
       
        $this->render('AddAnnonceTemplate', $viewData);
    }
    
}