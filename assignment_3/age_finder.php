<!-- 14. Calculate a person's age from their birthdate:
Calculate exact age in years
Display birthdate in readable format
Display current date
Given:
$birthdate = "2000-05-15";
Expected Output:
Birthdate: May 15, 2000
Current Date: November 03, 2025
Age: 25 years old -->

<?php 
$birthdate = "2000-05-15";

$dob = new DateTime($birthdate);
$today = new DateTime();

$age = $dob->diff($today)->y;

$readable_age = date("F d, Y",strtotime($birthdate));
$currentDate = date("F d, Y");

echo "Birthdate: $readable_age<br>";
echo "Current Date: $currentDate<br>";
echo "Age: $age years old";
?>