<?php

include_once "Interficie.php";

abstract class abstracteItem implements SalleGaming
{
    protected $nameValue;
    protected $size;
    protected $numberUsers = 0;

    protected function construct($nameValue, $size, $numberUsers) 
    {
        $this->nameValue = $nameValue;
        $this->size = $size;
        $this->numberUsers = $numberUsers;
        }
    public function getNameValue()
    {
        return $this->nameValue;
    }
    public function setNameValue($nameValue)
    {
        $this->nameValue = $nameValue;
        return $this;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
    public function getNumberUsers()
    {
        return $this->numberUsers;
    }
    public function setNumberUsers($numberUsers)
    {
        $this->numberUsers = $numberUsers;
        return $this;
    }
    abstract public function Use(); //TODO: Poner a Expandible + Tool la function Use();
}