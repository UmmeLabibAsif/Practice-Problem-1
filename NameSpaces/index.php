<?php

require 'Admin.php';
require 'Regular.php';

$obj = new admin\User("Labib");
$obj->getRole();


$obj1 = new regular\User("Labib");
$obj1->getRole();

?>