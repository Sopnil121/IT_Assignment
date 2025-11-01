<!-- Write a PHP program that reads 10 numbers and stops input when a negative number is entered. -->
<?php
for ($i = 1; $i <= 10; $i++) {
    $num = -1;

    if ($num < 0) {
        echo "Negative number entered. Stopping input.\n";
        break;
    }

    echo "You entered: $num\n <br>";
}
?>
