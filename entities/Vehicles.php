<?php

abstract class Vehicles{

    protected $id,
              $colors,
              $wheels,
              $speed,
              $models,
              $type;

    /**
     * __construct
     *
     * @param  mixed $array
     *
     * function construct to initialise the object's properties
     */
    public function __construct(array $array){

            $this->hydrate($array);

    }    


    /**
     * hydrate
     *
     * @param  mixed $array
     *
     * @return void
     */
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

    /**
     * getId
     *
    * function getter allows us to control access to id

     */
    public function getId(){

        return $this->id;
    }


    /**
     * getColors
     *
     * function getter allows us to control access to colors

     */
    public function getColors(){

        return $this->colors;
    }

    /**
     * getWheels
     *
     * function getter allows us to control access to wheels
     */
    public function getWheels(){

        return $this->wheels;
    }

    /**
     * getSpeed
     *
     * function getter allows us to control access to wheels
     */
    public function getSpeed(){

        return $this->speed;
    }

    /**
     * getModels
     *
     * function getter allows us to control access to models
     */
    public function getModels(){

        return $this->models;
    }

    /**
     * getType
     *
     * function getter allows us to control access to type
     */
    public function getType(){

        return $this->type;
    }

    /**
     * setId
     *
     * @param  mixed $id
     *
     * function setter allows us to “set” the value of  id
     */
    public function setId($id){

        $this->id = $id;
    }

    /**
     * setColors
     *
     * @param  mixed $colors
     *
     * @function setter allows us to “set” the value of  colors
     */
    public function setColors($colors){

        $this->colors = $colors;
    }

    /**
     * setWheels
     *
     * @param  mixed $wheels
     *
     * function setter allows us to “set” the value of  wheels
     */
    public function setWheels($wheels){

        $this->wheels = $wheels;
    }

    /**
     * setSpeed
     *
     * @param  mixed $speed
     *
     * function setter allows us to “set” the value of  speed
     */
    public function setSpeed($speed){

        $this->speed = $speed;
    }

    /**
     * setModels
     *
     * @param  mixed $models
     *
     * function setter allows us to “set” the value of  models
     */
    public function setModels($models){

        $this->models = $models;
    }

    /**
     * setType
     *
     * @param  mixed $type
     *
     * function setter allows us to “set” the value of  type
     */
    public function setType($type){

        $this->type = $type;
    }
}

?>