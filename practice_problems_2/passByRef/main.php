<?php
function double_val (&$input) {
    for ($index = 0; $index < count($input); $index++) {
        $input[$index] = $input[$index] * 2;
    }
    return $input;
}

$input = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
print_r(double_val($input));
?>
