<?php
$removes_odd = function (array $input) {
    $counter = 0;

    while (count($input) > $counter) {
        if ($input[$counter] % 2 != 0) {
            unset($input[$counter]);
            $input = array_values($input);  
    } 
    else {
    $counter++;
    }
}
    $input = array_values($input);
    return $input;
};

$input = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 13 ,9, 11, 102, 103, 104);
print_r($removes_odd($input));
?>
