<?php
function add_numbers($num1, $num2) {
   if (is_numeric($num1) & is_numeric($num1)){
        return $num1 + $num2;
   }
    else {
        return "Inputs are neither float nor integer";
    }
}

$sum = add_numbers("10", "20.5");
echo "Result 1: $sum\n"; 

$sum = add_numbers(10, "20.5");
echo "Result 2: $sum\n"; 

$sum = add_numbers(10, 20.5);
echo "Result 3: $sum\n"; 

$sum = add_numbers("10", 20.5);
echo "Result 4: $sum\n"; 
?>
