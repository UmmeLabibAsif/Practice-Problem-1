<?php
require 'Admin.php';
require 'Regular.php';

$obj = new Admin\User("Labib");
$obj->get_role();

$obj1 = new Regular\User("Labib");
$obj1->get_role();
?>
