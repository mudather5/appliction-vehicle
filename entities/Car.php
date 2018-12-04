<?php

    class Car extends Vehicles{

            protected $glass;
            protected $doors;

            
            /**
             * getGlass
             *
             * Get the value of glass
             */
            public function getGlass(){

                return $this->glass;
            }

            /**
             * setGlass
             *
             * @param  mixed $glass
             *
             * Set the value of glass
             */
            public function setGlass($glass){

                $this->glass = $glass;
            }

            

            /**
             * getDoors
             *
             * Get the value of doors
             */
            public function getDoors()
            {
                        return $this->doors;
            }

            
            /**
             * setDoors
             *
             * @param  mixed $doors
             *
             * Set the value of doors
             */
            public function setDoors($doors)
            {
                        $this->doors = $doors;

                        return $this;
            }
    }


?>