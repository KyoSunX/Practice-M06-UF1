<?php

include "Expandible.php";

class Drink extends Expandable {
    private $healthUp;
    private $drinkUp;
    private $quantity;
    const MAX_QUANTITY = 250; //Int

    protected function __construct($size, $numberUsers, $nameValue, $healthUp, $drinkUp, $quantity, $MAX_QUANTITY) {
        Expandible::__construct($size, $numberUsers, $nameValue); //testear
        $this->healthUp = $healthUp;
        $this->drinkUp = $drinkUp;
        $this->quantity = $quantity;
        $this->MAX_QUANTITY = $MAX_QUANTITY;
    }

    public function setHealthUp($healthUp) {
        $this->healthUp = $healthUp;
    }
    public function setDrinkUp($drinkUp) {
        $this->drinkUp = $drinkUp;
    }
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    public function setMAX_QUANTITY($quantity) {
        $this->MAX_QUANTITY = $MAX_QUANTITY;
    }

    public function getHealthUp() {
        return $this->healthUp;
    }
    public function getDrinkUp() {
        return $this->drinkUp;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function MAX_QUANTITY() {
        return $this->MAX_QUANTITY;
    }

    public function __toString() {
        echo "$this->size, $this->numberUsers, $this->nameValue, $this->healthUp, $this->drinkUp, $this->quantity, $this->MAX_QUANTITY";
    }
}

?>
