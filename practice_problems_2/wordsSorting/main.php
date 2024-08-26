<?php

//this function sorts the array according to the length using bubblesort
function sortByLength ($text) {
    $wordsArray = str_word_count($text, 1);
    //print_r($wordsArray);
    $length = count($wordsArray);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            // Compare the length of adjacent words
            if (strlen($wordsArray[$j]) > strlen($wordsArray[$j + 1])) {
                // Swap the words if the current word is longer than the next word
                $temp = $wordsArray[$j];
                $wordsArray[$j] = $wordsArray[$j + 1];
                $wordsArray[$j + 1] = $temp;
            }
        }
    }
    return $wordsArray;
}

$text = "Bobby bought a bunch of bright blue balloons for 
his big birthday bash. 
The beautiful balloons bounced briskly in the breeze.";

print_r(sortByLength($text));
?>
