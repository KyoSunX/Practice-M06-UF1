<?php

include_once "Item.php";

class Tool extends abstracteItem 
{
    private $maxUses = 256;
    private $harmValue;
    private $isBroken;

    protected function __construct($nameValue, $size, $numberUsers, $maxUses, $harmValue, $isBroken) 
    {
        $this->nameValue = $nameValue;
        $this->size = $size;
        $this->numberUsers = $numberUsers;
        $this->maxUses = $maxUses;
        $this->harmValue = $harmValue;
        $this->isBroken =$isBroken;
    }

    //Reparar (numberUses = maxUses i maxUses = MaxUses / 2), 
    public function Reparar()
    {
        $this->numberUsers = $this->maxUses;

        $this->maxUses /= 2;
    }
    //Attack: Donat un Player, aplica un aleatori perquè el 75% dels casos l’hi baixi vida. 
    //Si li hem de baixar vida utilitzarem el mètode Injury de la classe Player.
    public function Attack()
    {
    // falta hacerla
    }
    //Use (per cada us -1, si numberUses = 0, no es pot utilitzar mes,  a no ser que es repari i isBroken = true)
    public function Use()
    {
        $this->numberUsers =- 1;
    }
}
?>