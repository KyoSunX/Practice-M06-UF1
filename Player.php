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
    public function Drink() //Realizamos dos if 'Para cada mano'.
    {
        if ($this->rightObject instanceof Drink)
        {
            $drink = $this->rightObject->getDrinkUp();
            $health = $this->rightObject->getHealthUp();

            $this->healthLevel += $health;
            $this->drinkLevel += $drink;

            if ($this->healthLevel > 100)
            {
                $this->healthLevel = 100;
            }
            if ($this->drinkLevel > 500)
            {
                $this->drinkLevel = 500;
            }
            $this->rightObject = null; //Gastamos el objeto
        } else if ($this->leftObject instanceof Drink)
        {
            $drink = $this->leftObject->getDrinkUp();
            $health = $this->leftObject->getHealthUp();

            $this->healthLevel += $health;
            $this->drinkLevel += $drink;

            if ($this->healthLevel > 100)
            {
                $this->healthLevel = 100;
            }
            if ($this->drinkLevel > 500)
            {
                $this->drinkLevel = 500;
            }
            $this->leftObject = null; //Gastamos el objeto
        }
    }
    //Eat (Si tenim un element de la classe food a una de les mans: +foodUp al foodLevel si es del type plant, 
    //+foodUp * 2 al foodLevel si es del type meat, fins a un màxim de 500, 
    //+healthUp al healthLevel fins a un màxim de 100. Un cop fet servir s’ha d’eliminar). 
    public function Eat()
    {
        if (get_class($this->rightObject) == "Food") //DUDAS: get_class($this->rightObject) == "Food"
        {
            $food = $this->rightObject->getFoodUp();
            $health = $this->rightObject->getHealthUp();
            $type = $this->rightObject->getType();

            if ($type = "plant")
            {
                $this->foodLevel =+ $food;
            }
            if ($type == "meat")
            {
                $this->foodLevel = $food * 2; //DUDAS
            }
            if ($this->foodLevel > 500)
            {
                $this->foodLevel = 500;
            }
            if ($this->healthLevel > 100)
            {
                $this->healthLevel = 100;
            }
            $this->rightObject = null;
        } else if (get_class($this->leftObject) == "Food") //DUDAS: get_class($this->rightObject) == "Food"
        {
            $food = $this->leftObject->getFoodUp();
            $health = $this->leftObject->getHealthUp();
            $type = $this->leftObject->getType();

            if ($type = "plant")
            {
                $this->foodLevel =+ $food;
            }
            if ($type == "meat")
            {
                $this->foodLevel = $food * 2; //DUDAS
            }
            if ($this->foodLevel > 500)
            {
                $this->foodLevel = 500;
            }
            if ($this->healthLevel > 100)
            {
                $this->healthLevel = 100;
            }
            $this->leftObject = null;
        }
    }
    /*
    TakeMedicine (Si tenim un element de la classe Medicine a una de les mans: 
    +healthUp al healthLevel fins a un màxim de 100). 
    Un cop fet servir s’ha d’eliminar).
    */
    public function TakeMedicine()
    {
        if (get_class($this->leftObject) == "Medicine")
        {
            $health = $this->leftObject->getHealthUp();
            $this->healthLevel += $health;
            if ($this->healthLevel > 100)
            {
                $this->healthLevel = 100;
            }
            $this->leftObject = null;
        } else if (get_class($this->rightObject) == "Medicine")
        {
            $health = $this->rightObject->getHealthUp();
            $this->healthLevel += $health;
            if ($this->healthLevel > 100)
            {
                $this->healthLevel = 100;
            }
            $this->rightObject = null;
        }
    }
    /*
    Injury: Donat un paràmetre d’entrada redueix la vida en les unitats indicades, 
    assegura’t que es un numero (pot ser decimal). Si es decimal s’haurà 
    d’arrodonir a enter abans de baixar la vida. 
    Recorda que la vida no pot valer menys de 0.
    */
    public function Injury($injury)
    {
        $damage = round($injury);
        $this->healthLevel -= $damage;
        if ($this->healthLevel < 0)
        {
            $this->healthLevel = 0;
        }
    }
    /*
    SearchInventory: Donat un nom d’Item busca’l al inventori i retorna quants n’hi ha 
    (alerta, no fer un echo, diu ‘retornar’!).
    */
    public function SearchInventory($itemName)
    {
        
    }
    /*
    HealthCheck: Imprimeix per pantalla el següent (Utilitza un Switch Case):
        Si la vida esta entre 100 i 75: Very good health!
        Si la vida esa entre 74 i 50:  Health is good!
        Si la vida esta entre 49 i 25: Regular health!
        Si la vida esta entre 24 i 1: Critical condition!
        Si la vida es 0: R.I.P!
        Qualsevol altre cas: Something is wrong...
    */
    public function HealthCheck()
    {
        $menu = $this->healthLevel;
        switch ($menu) {
            case 75...100:
                echo "Very good health!";
                break;
            case 50...74:
                echo "Health is good!";
                break;
            case 25...49:
                echo "Regular health!";
                break;
            case 1...24:
                echo "Critical condition!";
                break;
            case 0:
                echo "R.I.P!";
                break;
            default:
                echo "Something is wrong...";
                break;
        }
    }
    /*
    MoveToHand: Donat una posicó X i Y, agafa l’Item d’aquella posició treu-lo del 
    inventory (Remove) i coloca’l a la mà esquerra, si esta plena coloca’l a la dreta, 
    si estan les dues plenes, mostra el text: ‘Hands already in use!’.
    */
    public function MoveToHand($x, $y)
    {
        if ($this->inventory[$x][$y] != null)
        {
            $item = $this->inventory[$x][$y];
        } 
        if ($this->leftObject == null)
        {
            $this->leftObject = $item;
        } else if ($this->rightObject == null) {
            $this->rightObject = $item;
        } else {
            echo "Hands already in use!";
        }
    }
    /*
    MoveToInventory. Donat un paràmetre booleà (s’ha de comprovar) si es 0/false mou a 
    l’inventory a una posició buida l’objecte que tinguis a la mà esquerra. 
    Si es true/1 mou a l’inventory a una posició buida l’objecte que tinguis a la mà dreta.
    Si esta l’inventory ple, mostra el text: ‘Inventory Full’.
    */
    public function MoveToInventory($swapInventory) //boolean
    {

    }
}

?>