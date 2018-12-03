<?php

class Truck extends Vehicles{

    protected $doors;
    protected $glass;
            


    public function getDoors(){

        return $this->doors;

    }

    public function setDoors($doors){

        $this->doors = $doors;
    }

    public function getGlass(){

        return $this->glass;
    }

    public function setGlass($glass){

        $this->glass = $glass;
    }

}


