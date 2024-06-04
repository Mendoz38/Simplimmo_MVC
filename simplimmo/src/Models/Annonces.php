<?php
// 3eme MVCR appelé

class Annonces {

    private $id;
    private $title;
    private $description;
    private $city;
    private $price;
    private $surface;
    private $rooms;
    private $type;
    private $date_crea;

        // Propriétés supplémentaires pour house
        private $swimmingpool;
        private $garden;
    
        // Propriétés supplémentaires pour appartment
        private $elevator;
        private $box;
        private $level;
        private $parking;
        private $terrasse;

    public function getId()    {
        return $this->id;
    }

    public function getTitle()    {
        return $this->title;
    }

    public function getDescription()    {
        return $this->description;
    }

    public function getCity()    {
        return $this->city;
    }

    public function getPrice()    {
        return $this->price;
    }

    public function getSurface()    {
        return $this->surface;
    }

    public function getRooms()    {
        return $this->rooms;
    }

    public function getType()    {
        return $this->type;
    }

    public function getDateCrea()    {
        return $this->date_crea;
    }

    public function getswimmingpool() {
        return $this->swimmingpool;
    }

    public function getGarden() {
        return $this->garden;
    }

    public function getElevator() {
        return $this->elevator;
    }

    public function getBox() {
        return $this->box;
    }

    public function getLevel() {
        return $this->level;
    }

    public function getTerrasse() {
        return $this->terrasse;
    }

    public function getParking() {
        return $this->parking;
    }

    public function setAdditionalProperties($data) {
        if (isset($data['id'])) $this->id = $data['id']; //house
        if (isset($data['swimmingpool'])) $this->swimmingpool = $data['swimmingpool']; //house
        if (isset($data['garden'])) $this->garden = $data['garden'];//house
        if (isset($data['level'])) $this->level = $data['level'];//house
        if (isset($data['elevator'])) $this->elevator = $data['elevator']; //appartment
        if (isset($data['box'])) $this->box = $data['box']; //appartment
        if (isset($data['terrasse'])) $this->terrasse = $data['terrasse']; //appartment
        if (isset($data['parking'])) $this->parking = $data['parking']; //appartment
    }
}