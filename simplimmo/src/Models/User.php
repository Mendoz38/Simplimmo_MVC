<?php

class User {

    private $id;
    private $name;
    private $surname;
    private $phone;
    private $mail;
    private $status;
    private $date_crea;

    public function getId()
    {
        return $this->id;
    }

    public function getname()
    {
        return $this->name;
    }

    public function getsurname()
    {
        return $this->surname;
    }

    public function getphone()
    {
        return $this->phone;
    }

    public function getmail()
    {
        return $this->mail;
    }

    public function getstatus()
    {
        return $this->status;
    }

    public function getDateCrea()
    {
        return $this->date_crea;
    }

}