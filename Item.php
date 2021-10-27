<?php

include "Interficie.php";

abstract class abstracteItem implements SalleGaming()
{

protected $nameValue == "Juan";
protected $size;
protected $numberUsers;

protected function __construct($nameValue, $size, $numberUsers) {
    $this->nameValue = $nameValue;
    $this->size = $size;
    $this->numberUsers = $numberUsers;
}

public function getName() {
    $nameValue = $this->nameValue;
}
public function setName ($nameValue) {
    $nameValue = $this->nameValue;
}
public function __toString() {
    echo "Todo correcto? Y yo que me alegro <3";
}

protected function __construct($nameValue)
{
    $this->size = $size;
    $this-> numberUsers = $numberUsers;
}

public function getSize(){
    $size = $this->size;
}

public function getNumberUsers(){
    $numberUsers = $this->numberUsers;
}

public function setSize(){
    $size = $this->size;
}

public function setgetNumberUsers(){
    $numberUsers = $this->numberUsers;
}

abstract public function Use();

}
?>