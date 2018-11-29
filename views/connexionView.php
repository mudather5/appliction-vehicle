<?php
//this can be something close to a routing system
//header('Location: controllers/index.php');

 ?>



 

    <form action="" method="POST">
        <input id="name" name="name" type="text" placeholder="name of vehicle" required><br>
        <input type="submit" name="add" value="add vehicle"><br>

        <select name="vehicle_list">
            <option value="car">Car</option>
            <option value="truck">Truck</option>
            <option value="motorbike">Motorbike</option>

        </select>
    </form>


