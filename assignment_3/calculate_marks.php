<!-- 4. Create an associative array with subject names as keys and marks as values:
`$marks = [
      "Internet Technology" => 85,
      "Data Structure" => 78,
      "Database" => 92,
      "Java Programming" => 88
];
Calculate and display:
    - Each subject with marks
    - Total marks
    - Average marks
    - Percentage (assume each subject is out of 100)
    - Grade based on percentage:
      - A: 80% and above
      - B: 60% - 79%
      - C: 40% - 59%
      - F: Below 40%
Expected Output:
MARK SHEET
Internet Technology: 85
Data Structure: 78
Database: 92
Java Programming: 88
----------------------
Total Marks: 343
Average: 85.75
Percentage: 85.75%
Grade: A -->

<?php
$marks = [
      "Internet Technology" => 85,
      "Data Structure" => 78,
      "Database" => 92,
      "Java Programming" => 88
];
$total = 0;
echo "MARK SHEET <br>";
foreach ($marks as $subject => $mark) {
      echo $subject . ": " . $mark . "<br>";
      $total = $total + $mark;
}

echo $total . "<br>";
echo "Average: " . $total / count($marks). "<br>";
$percentage =  ($total / 400)*100 ;
echo "Percentage: " . ($total / 400)*100 . "% <br>" ;

if($percentage > 80)
      echo "Grade : A";
elseif($percentage > 60 && $percentage<79)
      echo "Grade :B";
elseif($percentage > 40 && $percentage<59)
      echo "Grade :C";
else
      echo "Fail";

?>