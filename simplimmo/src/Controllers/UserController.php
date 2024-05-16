<?php

require_once __DIR__ . '/../Services/Response.php';

class UserController
{
    use Response;

    public function index($id)
    {
        $title = "Détail Annonce ";

        $viewData = [
			'title' => $title,
            'id' => $id
        ];

        $this->render('UserTemplate', $viewData);
    }
}
