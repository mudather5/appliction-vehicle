<?php

class Motorbike extends Vehicles{

    protected $hands;



    /**
     * getHands
     *
     * function getter allows us to control access to hands
     */
    public function getHands(){

        return $this->hands;

    }

    /**
     * setHands
     *
     * @param  mixed $hands
     *
     * Set the value of hands
     */
    public function setHands($hands){

        $this->hand = $hands;
    }

}



?>