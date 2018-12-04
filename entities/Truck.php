<?php

class Truck extends Vehicles{

    protected $doors;
    protected $glass;
            


    /**
     * getDoors
     *
     * function getter allows us to control access to doors
     */
    public function getDoors(){

        return $this->doors;

    }

    /**
     * setDoors
     *
     * @param  mixed $doors
     *
     * function setter allows us to “set” the value of  doors
     */
    public function setDoors($doors){

        $this->doors = $doors;
    }

    /**
     * getGlass
     *
     * function getter allows us to control access to glass
     */
    public function getGlass(){

        return $this->glass;
    }

    /**
     * setGlass
     *
     * @param  mixed $glass
     *
     * function setter allows us to “set” the value of glass
     */
    public function setGlass($glass){

        $this->glass = $glass;
    }

}


