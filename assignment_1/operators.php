
  <?php
// a
$num1 = 20;
$num2 = 6;

echo "Part (a): Arithmetic Operators<br>";
echo "Number 1 = $num1, Number 2 = $num2<br>";
echo "Sum = " . ($num1 + $num2) . "<br>";
echo "Difference = " . ($num1 - $num2) . "<br>";
echo "Product = " . ($num1 * $num2) . "<br>";
echo "Division = " . ($num1 / $num2) . "<br>";
echo "Modulus = " . ($num1 % $num2) . "<br><br>";


// b 
echo "b: Assignment Operators<br>";
$x = 10;
echo "Initial value of x = $x<br>";

$x += 5;
echo "After x += 5, x = $x<br>";

$x -= 3;
echo "After x -= 3, x = $x<br>";

$x *= 2;
echo "After x *= 2, x = $x<br>";

$x /= 4;
echo "After x /= 4, x = $x<br>";

$x %= 3;
echo "After x %= 3, x = $x<br><br>";


//  c
echo "c: Logical Operators<br>";
$number = 44;

echo "Number = $number<br>";


// Check if number is between 1 and 100 AND even

// using AND operator
if ($number >= 1 && $number <= 100 && $number % 2 == 0) {
    echo "The number is between 1 and 100 and even.<br>";
}
// Using OR operator
if ($number < 1 || $number > 100) {
    echo "The number is outside the range 1 to 100.<br>";
}
// Using NOT operator
if (!($number % 2 == 1)) {
    echo "The number is not odd (so it is even).<br>";
}
?>

