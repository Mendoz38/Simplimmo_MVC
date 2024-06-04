<?php

require_once __DIR__ . '/../Services/Response.php';

class SuccessController
{
    use Response;

    public function index()
    {
        $title = "Success";

        $viewData = [
			'title' => $title
        ];

        $this->render('SuccessTemplate', $viewData);
    }
}
