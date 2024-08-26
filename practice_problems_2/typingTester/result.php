<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //ask
    $end_time = time();

    //Getting the variables
    $time_taken = $end_time - $_SESSION['start_time'];
    $originalText = "Bobby bought a bunch of bright blue balloons for his big birthday bash";
    $typedText = $_POST['typedText'];

    //Words per minute
    $word_count = str_word_count($typedText);
    $words_per_minute = (($word_count) / $time_taken) * 60;

    //accuracy
    $originalWords = explode(' ', $originalText);
    $typedWords = explode(' ', $typedText);
    $correctWords = 0;

    for ($i = 0; $i < count($originalWords); $i++) {
        if (isset($typedWords[$i]) && $typedWords[$i] === $originalWords[$i]) { //ask
            $correctWords++;
        }
    }

    $accuracy = ($correctWords / count($originalWords)) * 100;

    echo "<h2>Results</h2>";
    echo "<p>Time taken: " . round($timeTaken, 2) . " seconds</p>";
    echo "<p>Words per minute (WPM): " . round($wordsPerMinute, 2) . "</p>";
    echo "<p>Accuracy: " . round($accuracy, 2) . "%</p>";
    echo "<p>Original Text: $originalText</p>";
    echo "<p>Your Typed Text: $typedText</p>";

    unset($_SESSION['start_time']);

} else {
    "<p> Invalid Request</p>";
}
?>
