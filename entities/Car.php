<?php

    class Car extends Vehicles{

            protected $glass;
            protected $doors;

            /**
             * getGlass
             *
             * @return void
             */
            public function getGlass(){

                return $this->glass;
            }

            /**
             * setGlass
             *
             * @param  mixed $glass
             *
             * @return void
             */
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