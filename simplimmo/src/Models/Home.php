<?php
// 3eme MVCR appelé

class Home {

    private $id;
    private $title;
    private $description;
    private $city;
    private $price;
    private $surface;
    private $rooms;
    private $type;
    private $date_crea;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSurface()
    {
        return $this->surface;
    }

    public function getRooms()
    {
        return $this->rooms;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDateCrea()
    {
        return $this->date_crea;
    }

}