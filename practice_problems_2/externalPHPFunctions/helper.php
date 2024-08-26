<?php
function factorial ($input) {
    $result = 1;

    for ($i = $input; $i > 0; $i--) {
        $result = $result * $i;
    }
    return $result;
}
?>
