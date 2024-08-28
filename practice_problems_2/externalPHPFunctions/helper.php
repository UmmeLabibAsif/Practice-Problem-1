<?php
function factorial ($input) {
    $result = 1;

    for ($index = $input; $index > 0; $index--) {
        $result = $result * $index;
    }
    return $result;
}
?>
