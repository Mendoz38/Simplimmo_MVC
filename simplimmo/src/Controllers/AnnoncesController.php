<?php

require_once __DIR__ . '/../Services/Response.php';

class AnnoncesController
{
    use Response;

    public function index()
    {
        $title = "Contact";

        $viewData = [
			'title' => $title
        ];

        $this->render('AnnoncesTemplate', $viewData);
    }
}
