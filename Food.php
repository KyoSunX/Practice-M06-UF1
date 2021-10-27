<?php

include "Expandible.php";

class Food extends Expandable {
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


public function getHealthUp(){
    $healthUp = $this->healthUp;
}

public function getFoodUp(){
    $foodUp = $this->foodUp;
}

public function getType(){
    $type = $this->type;
}

public function setgethealthUp(){
    $healthUp = $this->healthUp;
}

public function setgetfoodUp(){
    $foodUp = $this->foodUp;
}

public function setgetType(){
    $type = $this->type;
}



public function __toString() {
    echo "$this->healthUp, $this->foodUp, $this->type";
}








}
?>