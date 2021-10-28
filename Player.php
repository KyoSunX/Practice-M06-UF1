<?php

include "Interficie.php";

class Player extends SalleGaming
{
    /*
    healthLevel, foodLevel, drinkLevel, Inventory (matriu), 
    rightObject (pot contenir un Item), leftObject (pot contenir un Item)
    */
    private $healthLevel;
    private $foodLevel;
    private $drinkLevel;
    private $inventory = array(array(), array());
    private $rightObject = null;
    private $leftObject = null;

    protected function __construct($healthLevel, $foodLevel, $drinkLevel, $inventory, $rigthObject, $leftObject)
    {
        $this->healthLevel = $healthLevel;
        $this->foodLevel = $foodLevel;
        $this->drinkLevel = $drinkLevel;
        $this->inventory = $inventory;
        $this->rightObject = $rigthObject;
        $this->leftObject = $leftObject;
    }
    //SwapHands: Intercanvia els items que tens a cada mà.
    public function SwapHands() 
    {
        $temp = $this->rightObject;
        $this->rightObject = $this->leftObject;
        $this->leftObject = $temp;
    }
    //Drink (Si tenim un element de la classe drink a una de les mans: +drinkUp al drinkLevel 
    //fins a un màxim de 500, +healthUp al healthLevel fins a un màxim de 100.)
    public function Drink() 
    {
        if ($this->rightObject instanceof Drink)
        {
            if ($bool == true)
            {
                
            }
        }
    }
}

?>