<?php

abstract class Vehicles{

    protected $colors,
              $wheels,
              $speed,
              $models,
              $type;

    public function __construct(array $array){

            $this->hydrate($array);

    }    


    public function hydrate(array $array)
    {
        foreach ($array as $key => $value)
        {
            $method = 'set'.ucfirst($key);
                
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }


    public function getColors(){

        return $this->colors;
    }

    public function getWheels(){

        return $this->wheels;
    }

    public function getSpeed(){

        return $this->speed;
    }

    public function getModels(){

        return $this->models;
    }

    public function getType(){

        return $this->type;
    }

    public function setColors($colors){

        $this->colors = $colors;
    }

    public function setWheels($wheels){

        $this->wheels = $wheels;
    }

    public function setSpeed($speed){

        $this->speed = $speed;
    }

    public function setModels($models){

        $this->models = $models;
    }

    public function setType($type){

        $this->type = $type;
    }
}

?>