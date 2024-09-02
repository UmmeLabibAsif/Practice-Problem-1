<?php
/**
 * Filters and returns words from a given input string that start with a specified letter.
 *
 * This function takes a string of text and a starting letter as input. It splits the text into individual words,
 * checks each word to see if it starts with the specified letter, and if it does, the word is added to the result array.
 * The function also prints each matching word.
 *
 * @param string $input The input string containing the text to search.
 * @param string $starting_letter The letter that each word must start with to be included in the result.
 *
 * @return array An array of words from the input string that start with the specified letter.
 */
function start_letter($input, $starting_letter) {
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
