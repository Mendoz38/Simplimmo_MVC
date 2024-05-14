<?php

require_once __DIR__ . '/../Services/Response.php';

class StudentController
{
    use Response;

    public function index()
    {
        print_r("zzz");
        die();
        $studentRepository = new StudentRepository();
        $students = $studentRepository->getAll();

        $viewData = [
            'students' => $students,
						'title' => "Hello"
        ];

        $this->render('StudentListTemplate', $viewData);
    }
}
