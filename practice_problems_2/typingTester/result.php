<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $end_time = time();

    if (isset($_SESSION['start_time'])) {
        $start_time = $_SESSION['start_time'];
    } else {
        $start_time = 0;
    }
    
    $time_taken = $end_time - $start_time;
    $original_text = "Bobby bought a bunch of bright blue balloons for his big birthday bash.";
    $typed_text = $_POST['typed_text'];

    // Words per minute calculation
    $word_count = str_word_count($typed_text);
    $words_per_minute = ($word_count / $time_taken) * 60;

    // Accuracy calculation
    $original_words = explode(' ', $original_text);
    $typed_words = explode(' ', $typed_text);
    $correct_words = 0;

    for ($index = 0; $index < count($original_words); $index++) {
        if (isset($typed_words[$index]) && $typed_words[$index] === $original_words[$index]) {
            $correct_words++;
        }
    }

    $accuracy = ($correct_words / count($original_words)) * 100;

    // Display the results
    echo "<h2>Results</h2>";
    echo "<p>Time taken: " . round($time_taken, 2) . " seconds</p>";
    echo "<p>Words per minute (WPM): " . round($words_per_minute, 2) . "</p>";
    echo "<p>Accuracy: " . round($accuracy, 2) . "%</p>";
    echo "<p>Original Text: $original_text</p>";
    echo "<p>Your Typed Text: $typed_text</p>";

    // Clear the start time for the next test
    unset($_SESSION['start_time']);

} else {
    echo "<p>Invalid Request</p>";
}
?>
