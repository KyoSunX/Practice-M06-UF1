<?php

include "Item.php";


class Tool extends Item {

    private $maxUses == 256;
    private $harmValue;
    private $isBroken;

public function reparar()
{
    $numberUses = $maxUses;

    $maxUses = $maxUses / 2;
}

public function attack()
{
   // falta hacerla
}

public function Use()
{
    // falta hacerla
}
?>