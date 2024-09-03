<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['question01'])) {
        $question01 = htmlspecialchars($_POST['question01']);
        
        if (empty($question01)) {
            die("Error: Please fill out the question.");
        }

    } else {
        die("Error: Question parameter not found in the POST request.");
    }
}
?>