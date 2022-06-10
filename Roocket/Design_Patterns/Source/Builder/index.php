<?php

interface  Builder
{

    public  function  reset();


}

class Car
{
    private $seats;
    private $engine;
    private $tripComputer;
    private $gps;

    /**
     * @param $seats
     * @param $engine
     * @param $tripComputer
     * @param $gps
     */
    public function __construct($seats, $engine, $tripComputer, $gps)
    {
        $this->seats = $seats;
        $this->engine = $engine;
        $this->tripComputer = $tripComputer;
        $this->gps = $gps;
    }


}

$car= new Car(4,);