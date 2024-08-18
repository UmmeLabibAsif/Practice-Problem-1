<?php

function addNumbers($num1, $num2) {

   if (is_numeric($num1) & is_numeric($num1))
   {
        return $num1 + $num2;
   }
    else 
    {
        return "Inputs are neither float nor integer";
    }
  

}

$result2 = addNumbers("10", "20.5");
echo "Result 1: $result2\n"; 

$result2 = addNumbers(10, "20.5");
echo "Result 2: $result2\n"; 

$result2 = addNumbers(10, 20.5);
echo "Result 3: $result2\n"; 

$result2 = addNumbers("10", 20.5);
echo "Result 4: $result2\n"; 

?>