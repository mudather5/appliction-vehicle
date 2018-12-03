<?php

function chargerClasse($classname)
{
    if(file_exists('./model/'. $classname.'.php'))
    {
        require './model/'. $classname.'.php';
    }
    else 
    {
        require './entities/' . $classname . '.php';
    }
}
spl_autoload_register('chargerClasse');

$vehicleManager = new VehicleManager(Database::DB());

if (!empty($_POST['submit'])){

    if($_POST['type'] == 'car'){

        $car = new Car([
            "colors" => $_POST['colors'],
            "models" =>$_POST['models'],
            "wheels" =>$_POST['wheels'],
            "speed" =>$_POST['speed'],
            "glass" =>$_POST['glass'],
            "type" =>$_POST['type']

    
        ]);
        $vehicleManager = new VehicleManager(Database::DB());
        $vehicleManager->addVehicle($car);

    } elseif($_POST['type'] == "truck"){
    $truck = new Truck([
        "colors" => $_POST['colors'],
        "models" =>$_POST['models'],
        "wheels" => (int) $_POST['wheels'],
        "speed" => (int) $_POST['speed'],
        "doors" => (int) $_POST['doors'],
        "type" =>$_POST['type'],
        "glass" => (int) $_POST['glass']


    ]);

    var_dump($truck);
    $truckManager = new VehicleManager(Database::DB());
    $truckManager->addVehicle($truck);

} elseif($_POST['type'] == 'motorbike'){
    $motorbike = new Motorbike([
        "colors" => $_POST['colors'],
        "models" =>$_POST['models'],
        "wheels" =>$_POST['wheels'],
        "speed" =>$_POST['speed'],
        "hands" =>$_POST['hands'],
        "type" =>$_POST['type']


    ]);

    //var_dump($motorbike);

    $truckManager = new VehicleManager(Database::DB());
    $vehicleManager->addVehicle($motorbike);



}


$vehicles = $vehicleManager->getVehicles();
}


include './views/indexVue.php';

 ?>
