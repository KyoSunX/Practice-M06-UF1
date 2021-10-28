<?php

include_once "Expandible.php";

class Food extends Expendable 
{
        private $healthUp;
        private $foodUp;
        private $type; //plant, meat

    protected function __construct($size, $numberUsers, $nameValue, $healthUp, $foodUp, $type  )
    {
            parent::__construct($size, $numberUsers, $nameValue);
            $this->healthUp = $healthUp;
            $this->foodUp = $foodUp;
            $this->type = $type;
    }
    public function getHealthUp()
    {
        $healthUp = $this->healthUp;
    }
    public function getFoodUp()
    {
        $foodUp = $this->foodUp;
    }
    public function getType()
    {
        $type = $this->type;
    }
    public function setHealthUp()
    {
        $healthUp = $this->healthUp;
    }
    public function setFoodUp()
    {
        $foodUp = $this->foodUp;
    }
    public function setType(){
        $type = $this->type;
    }
    public function __toString() 
    {
        return self::class .": " . "$this->healthUp, $this->foodUp, $this->type";
    }
}
?>