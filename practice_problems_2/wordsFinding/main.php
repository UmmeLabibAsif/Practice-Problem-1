<?php
// This function returns all words that start with the given starting letter
function start_letter ($input, $starting_letter) {
    $result = array();
    $words = str_word_count($input, 1);

    foreach ($words as $word) {
        if ($word[0] == $starting_letter) {
            echo $word," ";
            array_push($result, $word);
    }
}
    return $result;
}

$input = "Bobby bought a bunch of bright blue balloons for his big birthday bash. 
The beautiful balloons bounced briskly in the breeze.";
$starting_letter = 'b';
print_r(start_letter($input, $starting_letter));
?>
