<?php
//this function returns all words that starts with the given criteria
function startLetter ($text, $criteria) {
    $result = array();
    $wordsArray = str_word_count($text, 1);
    //print_r($wordsArray);

    foreach ($wordsArray as $word) {
        if ($word[0] == $criteria) {
            array_push($result, $word);
    }
}
    return $result;
}

$text = "Bobby bought a bunch of bright blue balloons for 
his big birthday bash. 
The beautiful balloons bounced briskly in the breeze.";
$criteria = 'b';

print_r(startLetter($text, $criteria));
?>
