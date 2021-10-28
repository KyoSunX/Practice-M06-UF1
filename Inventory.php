<?php

/*
Aquesta classe implementarà la interfície SalleGaming.
Tindrà els atributs següents:  
matriu d’Items, maxX, maxY
Tindrà els mètodes següents: 
Constructor: Es crearà una matriu buida (null’s) de maxX i maxY.
Add: Donat un I’Item afegeix-lo al inventory a una posició buida. 
Remove: Donat un I’Item treu-lo del inventory, posa la posició a null.  
Reordenar: Posar tots els elements del inventory iguals un darrere l’altre. 
*/
include "Interficie.php";

class Inventory extends SalleGaming 
{
    private $items = array(
        array(), 
        array());
    private $maxY;
    private $maxX;
    //Constructor: Es crearà una matriu buida (null’s) de maxX i maxY.
    protected function __construct($items, $maxX, $maxY)
    {
        $this->items = $items[$maxX][$maxY];
        $this->maxX = $maxX;
        $this->maxY = $maxY;
    }
    //Add: Donat un I’Item afegeix-lo al inventory a una posició buida. 
    public function Add($itemUser) 
    {
        for ($i = 0; $i < $this->maxX; $i++) {
            for ($j = 0; $j < $this->maxY; $j++) {
                if ($this->items[$i][$j] == null) 
                {
                    $this->items[$i][$j] = $itemUser;
                    return true;
                }
            }
        }
    }
    //Remove: Donat un I’Item treu-lo del inventory, posa la posició a null.  
    public function Remove($itemUser)
    {
        for ($i = 0; $i < $this->maxX; $i++) {
            for ($j = 0; $j < $this->maxY; $j++) {
                if ($this->items[$i][$j] == $itemUser)
                    $items[$i][$j] = null;
                    //return true;
            }
        }
    }
    //Reordenar: Posar tots els elements del inventory iguals un darrere l’altre. 
    public function Reordenar() 
    {
        sort($this->items[$this->maxX][$this->maxY], SORT_REGULAR); //Metodo para ordenar los elementos. sort()/asort()/ksort()
    }
}

?>