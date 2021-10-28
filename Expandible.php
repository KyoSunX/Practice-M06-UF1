<?php

/*
Aquesta classe hereda d’Item.Tindrà els atributs següents:  
No tindrà atributs propis 
Tindrà els mètodes següents: 
Constructor, __toString, Use (set numberUses = +1)
*/

include "Item.php";

class Expendable extends abstracteItem
{
    protected function __construct($nameValue, $size, $numberUsers)
    {
        parent::__construct($nameValue, $size, $numberUsers);
    }

    public function __toString() 
    {
        echo "Todo correcto? Y yo que me alegro Expandable <3";
    }
    public function Use() //Preguntar $numberUsers
    {
        $this->numberUsers =+ 1;
    }

}


?>