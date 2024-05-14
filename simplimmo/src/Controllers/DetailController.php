<?php

require_once __DIR__ . '/../Services/Response.php';

class DetailController
{
    use Response;

    public function index()
    {
        $title = "Détail Annonce ";

        $viewData = [
			'title' => $title
        ];

        $this->render('DetailTemplate', $viewData);
    }
}
