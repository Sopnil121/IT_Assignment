<!-- 5. Create a 2D array containing information of 3 students:

Each student has: name, age, faculty. Display all student information.

Expected Output:

`Student 1: Ram, Age: 20, Faculty: BCA

Student 2: Sita, Age: 19, Faculty: BIT

Student 3: Hari, Age: 21, Faculty: BCA` -->

<?php
$details = [
    ["name"=> "Ram","Age"=> 20, "Faculty"=> "BCA"],
    ["name"=> "Sita","Age"=> 19, "Faculty"=> "BIT"],
    ["name"=> "Hari","Age"=> 21, "Faculty"=> "BCA"]
];
 $i = 1;
foreach($details as $detail){
    echo "Student ". $i .": " . $detail['name']  . ", Age :" . $detail['Age'] , ", Faculty :" . $detail['Faculty'] ."<br>";
    $i++;
}
?>