<!-- 3. Create an associative array for your student profile with the following keys:
name, roll_number, faculty, semester, email
Display the information in a formatted way.
Expected Output:
STUDENT PROFILE
Name: Ram Sharma
Roll Number: 25
Faculty: BCA
Semester: 3 
Email: ram.sharma@example.com -->

    <?php
    $student_info = [
        "name" => " Ram Sharma",
        "roll_number"=>25,
        "faculty"=> "BCA", 
        "semester" => 3, 
        "email" => "ram.sharma@example.com"
    ];

    // printing 
    echo "Name : " .$student_info['name'] ."<br>";
    echo "Roll No : " .$student_info['roll_number'] ."<br>";
    echo "Faculty : " .$student_info['faculty'] ."<br>";
    echo "Email : " .$student_info['email'] ."<br>";
    ?>