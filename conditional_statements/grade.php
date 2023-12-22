<h1>Grade</h1>
<?php
$marks = 65;
if ($marks < 0 || $marks > 100) {
    echo "You are using an invalid number.";
} else {
    if ($marks >= 1 && $marks <= 30) {
        echo "Fail";
    } elseif ($marks >= 31 && $marks <= 50) {
        echo "Third Division";
    } elseif ($marks >= 51 && $marks <= 70) {
        echo "Second Division";
    } elseif ($marks >= 71 && $marks <= 100) {
        echo "First Division";
    }
}

?>
