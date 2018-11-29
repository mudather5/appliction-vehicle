<?php

require '../entities/User.php';
require '../model/Database.php';

$user1 = new User([
    "id"=> 1,
    "pseudo"=> "cococco"
]);


include "../views/indexVue.php";
 ?>
