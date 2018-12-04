<?php
  include("template/header.php");

  echo '<div class="container">';


            foreach($vehicles as $vehicle){

                if($vehicle->getType() == 'motorbike'){

                    echo "Type: ".$vehicle->getType()."<br>". "Colors: ".$vehicle->getColors()."<br>"."Wheels: ". $vehicle->getWheels()."<br>"."Speed: ".$vehicle->getSpeed()."<br>" ;
                    echo "Models: ".$vehicle->getModels()."<br>"."hands: ".$vehicle->getHands()."<br>";  
                    echo "hands: ".$vehicle->getHands();
                    echo '<a href="index.php?remove="' .$vehicle->getId().'" class="btn btn-primary" name="submit" value="delete vehicle">Delete</a>'."<br>";


                }

                else{
                    
                    echo "Type: ".$vehicle->getType()."<br>". "Colors: ".$vehicle->getColors()."<br>"."Wheels: ". $vehicle->getWheels()."<br>"."Speed: ".$vehicle->getSpeed()."<br>" ;
                    echo "Models: ".$vehicle->getModels()."<br>"." Glass: ".$vehicle->getGlass()."<br>"."Doors: ".$vehicle->getDoors()."<br>"; ?>
                    <a href="index.php?remove=<?php echo $vehicle->getId(); ?>" class="btn btn-primary" name="submit" value="delete vehicle">Delete</a>


                <?php }
            }

    echo '</div>';



  ?>



<div class="container">

    <div class="justify-contain-center offset-1">
        <div class="row">
            <div class="col-7">
        
                <form action="" method="POST">       
                    <select name="type" class="form-control form-control-md">
                        <option value="car">Car</option>
                        <option value="truck">Truck</option>
                        <option value="motorbike">Motorbike</option>
                    </select><br>
                    <p>Colors:</p>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Color" name="colors"><br>
                    <p>Wheels:</p>
                    <input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Wheels" name="wheels"><br>
                    <p>Speed:</p>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Speed" name="speed"><br>
                    <p>Models</p>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Models" name="models"><br>
                    <p>glass:</p>
                    <input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Glass" name="glass"><br>
                    <p>Hands:</p>
                    <input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Hands" name="hands"><br>
                    <p>Doors</p>
                    <input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Doors" name="doors">
                    <button  class="btn btn-primary" name="submit" value="add vehicle">Add</button>

                </form>
            </div>
        </div>
    </div>
 </div>

 <?php

//    include("template/footer.php");


 ?>


