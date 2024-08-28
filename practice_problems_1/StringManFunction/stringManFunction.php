<?php
function formatString($input) {
    $input = trim($input);
    $input = preg_replace('/\s+/', ' ', $input);
    $input = ucwords($input);
    $input = str_replace("Php", "Hypertext Preprocessor", $input);

    echo $input;
}

formatString("   php  is a widely-used open source   general-purpose scripting language.   ");
?>
