<?php

include_once "Expandible.php";

class Medicine extends Expendable 
{
    private $healthUp;

    protected function __construct($size, $numberUsers, $nameValue, $healthUp  )
    {
            parent::__construct($size, $numberUsers, $nameValue, $healthUp);
    }

    public function getHealthUp()
    {
        $healthUp = $this->healthUp;
    }
    public function setgethealthUp()
    {
        $healthUp = $this->healthUp;
    }
    
}

?>