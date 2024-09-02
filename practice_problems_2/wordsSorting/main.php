<?php
//this function sorts the array according to the length using bubblesort
function sort_by_length ($input) {
    $words = str_word_count($input, 1);
    $length = count($words);

    for ($index = 0; $index < $length - 1; $index++) {
        for ($secondary_index = 0; $secondary_index < $length - $index - 1; $secondary_index++) {
            // Compare the length of adjacent words
            if (strlen($words[$secondary_index]) > strlen($words[$secondary_index + 1])) {
                // Swap the words if the current word is longer than the next word
                $temp = $words[$secondary_index];
                $words[$secondary_index] = $words[$secondary_index + 1];
                $words[$secondary_index + 1] = $temp;
            }
        }
    }
    return $words;
}

$input = "Bobby bought a bunch of bright blue balloons for his big birthday bash. 
The beautiful balloons bounced briskly in the breeze.";
print_r(sort_by_length($input));
?>
