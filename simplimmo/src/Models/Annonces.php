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
        private $pool;
        private $garden;
        private $test;
    
        // Propriétés supplémentaires pour apartment
        private $elevator;
        private $box;
        private $level;

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

    public function getPool() {
        return $this->pool;
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

    public function getTest() {
        return $this->test;
    }

    public function setAdditionalProperties($data) {
        if (isset($data['pool'])) $this->pool = $data['pool'];
        if (isset($data['garden'])) $this->garden = $data['garden'];
        if (isset($data['elevator'])) $this->elevator = $data['elevator'];
        if (isset($data['box'])) $this->box = $data['box'];
        if (isset($data['level'])) $this->level = $data['level'];
        if (isset($data['test'])) $this->test = $data['test'];
    }
}