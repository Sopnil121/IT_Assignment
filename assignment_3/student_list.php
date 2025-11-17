<!-- 15. Create a student list manager that:
Adds students to a list
Removes last student
Checks if a student exists
Displays total students
Given:
$students = ["Ram", "Sita", "Hari"];
// Add "Gita" and "Laxman"
// Remove last student
// Check if "Ram" exists
Expected Output:
Initial students: Ram, Sita, Hari
After adding: Ram, Sita, Hari, Gita, Laxman
After removing last: Ram, Sita, Hari, Gita
Total students: 4
Ram is in the list -->

<?php 
$students = ["Ram", "Sita", "Hari"];

echo "Initial students: " . implode(", ", $students) . "<br><br>";

$student = ["Gita","Laxman"];
array_push($students, "Gita", "Laxman");

echo "After adding: " . implode(", ", $students) . "<br><br>";

array_pop($student);
echo"After removing last: " . implode(",",$student);

echo  "<br>Total students: ".count($students);

// Check if Ram exists
if (in_array("Ram", $students)) {
    echo "Ram is in the list<br><br>";
} else {
    echo "Ram is NOT in the list<br><br>";
}
?>
