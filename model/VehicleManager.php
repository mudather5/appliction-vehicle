<?php

class VehicleManager{
    private $_db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function getDb(){
        
        return $this->_db;

    }

    public function setDb($db){

        $this->_db = $db;
    }

    public function getVehicles(){
        $arrayOfVehicles = [];

        $query = $this->getDB()->query('SELECT * FROM vehicles');
        $dataVehicles = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dataVehicles as $dataVehicle) {
            if ($dataVehicle['type'] == 'car') {
                $arrayOfVehicles[] = new Car($dataVehicle);
            } elseif ($dataVehicle['type'] == 'truck') {
                $arrayOfVehicles[] = new Truck($dataVehicle);
            } elseif ($dataVehicle['type'] == 'motorbike') {
                $arrayOfVehicles[] = new Motorbike($dataVehicle);
            }
        }

        return $arrayOfVehicles;
    }

    public function getVehicle($id)
    {
    

        if (is_int($id))
        {
            $query = $this->getDB()->prepare('SELECT * FROM vehicles WHERE id = :id');
            $query->bindValue('id', $id, PDO::PARAM_INT);
            $query->execute();
        }

        $dataVehicle = $query->fetch(PDO::FETCH_ASSOC);

        if ($dataVehicle['type'] == 'car') {

            return new Car($dataVehicle);
        }
        elseif($dataVehicle['type'] == 'truck'){

            return new Truck($dataVehicle);

        }
        elseif($dataVehicle['type'] == 'motorbike'){

            return new Motorbike($dataVehicle);   
        }
    }

    

    public function addVehicle($vehicle)
    {
        $query = $this->getDb()->prepare('INSERT INTO vehicles(models, colors, speed, wheels, glass, hands, doors, type) VALUES (:models, :colors, :speed, :wheels, :glass, :hands, :doors, :type)');
        $query->bindValue('models', $vehicle->getModels(), PDO::PARAM_STR);
        $query->bindValue('colors', $vehicle->getColors(), PDO::PARAM_STR);
        $query->bindValue('speed', $vehicle->getSpeed(), PDO::PARAM_INT);
        $query->bindValue('wheels', $vehicle->getWheels(), PDO::PARAM_INT);
        $query->bindValue('type', $vehicle->getType(), PDO::PARAM_STR);
        if($vehicle->getType() !== 'motorbike')
        {
            $query->bindValue('doors', $vehicle->getDoors(), PDO::PARAM_INT);
            $query->bindValue('glass', $vehicle->getGlass(), PDO::PARAM_INT);
            $query->bindValue('hands', NULL);
        }
        else
        {
            $query->bindValue('doors', NULL);
            $query->bindValue('glass', NULL);
            $query->bindValue('hands', $vehicle->getHands(), PDO::PARAM_INT);
        }
        
        $query->execute();

        $id = $this->getDb()->lastInsertId();
        $vehicle->hydrate([
            "id" => $id
        ]);
  
    }


    public function delete($vehicle)
    {
        $query = $this->getDb()->prepare('DELETE FROM vehicles WHERE id = :id');
        $query->bindValue('id', $vehicle, PDO::PARAM_INT);
        $query->execute();
    }

    // public function update($vehicle)
    // {
    //     $query = $this->getDb()->prepare('UPDATE vehicles SET type = :type, colors = :colors, speed = :speed, wheels = :wheels, glass = :glass, hands = :hands, doors = :doors  WHERE id = :id');
    //     $query->bindValue('type', $vehicle->getType(), PDO::PARAM_STR);
    //     $query->bindValue('colors', $vehicle->getColors(), PDO::PARAM_STR);
    //     $query->bindValue('speed', $vehicle->getSpeed(), PDO::PARAM_INT);
    //     $query->bindValue('wheels', $vehicle->getWheels(), PDO::PARAM_INT);
    //     $query->bindValue('glass', $vehicle->getGlass(), PDO::PARAM_INT);
    //     $query->bindValue('handss', $vehicle->getHands(), PDO::PARAM_INT);
    //     $query->bindValue('doors', $vehicle->getDoors(), PDO::PARAM_INT);
    //     $query->bindValue('id', $vehicle->getId(), PDO::PARAM_INT);
    //     $query->execute();
    // }

     
}

?>