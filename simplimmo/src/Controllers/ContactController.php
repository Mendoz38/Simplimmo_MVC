<?php

require_once __DIR__ . '/../Services/Response.php';

class ContactController
{
    use Response;

    public function index()
    {
        $title = "Contact";

        $viewData = [
			'title' => $title
        ];

        $this->render('ContactTemplate', $viewData);
    }
}
