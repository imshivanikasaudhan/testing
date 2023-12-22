<!-- <h1>Leap Year</h1> -->


<?php
try {
    $input = readline("Enter a year: ");
    $year = filter_var($input, FILTER_VALIDATE_INT);
    if ($year === false || $year < 0) {
        throw new Exception("Invalid input. Please enter a valid positive integer year.");
    }
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a leap year.\n";
    } else {
        echo "$year is not a leap year.\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
