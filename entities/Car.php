<?php

    class Car extends Vehicles{

            protected $glass;
            protected $doors;

            public function getGlass(){

                return $this->glass;
            }

            public function setGlass($glass){

                $this->glass = $glass;
            }


            /**
             * Get the value of doors
             */ 
            public function getDoors()
            {
                        return $this->doors;
            }

            /**
             * Set the value of doors
             *
             * @return  self
             */ 
            public function setDoors($doors)
            {
                        $this->doors = $doors;

                        return $this;
            }
    }


?>