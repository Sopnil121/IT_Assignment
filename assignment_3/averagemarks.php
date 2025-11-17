<?php

function calculateAverage(...$marks) {

    // if no marks passed
    if (count($marks) == 0) {
        return 0;
    }

    $total = array_sum($marks);
    $average = $total / count($marks);

    // round to 2 decimals
    return round($average, 2);
}

// Testing
echo "Average 1: " . calculateAverage(80, 90, 70) . "<br>";
echo "Average 2: " . calculateAverage(50, 60) . "<br>";
echo "Average 3: " . calculateAverage(100, 90, 95, 85) . "<br>";

?>
