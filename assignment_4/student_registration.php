<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post" >
        <label for="fname">Full Name :</label>
        <input type="text" name="full_name" placeholder="Enter your full name">
        <br><br>

        <!-- Radio buttons  -->
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male <br>
        <input type="radio" name="gender" value="Female"> Female <br>
        <input type="radio" name="gender" value="Other"> Other <br><br>

        <!-- hobbies -->
        <label for="hobbies"> Select Hobbies : </label> <br>
        <input type="checkbox" name="hobbies[]" value="Reading">Reading
        <input type="checkbox" name="hobbies[]" value="Sports">Sports
        <input type="checkbox" name="hobbies[]" value="Music">Music
        <input type="checkbox" name="hobbies[]" value="Traveling">Traveling
        <br>
        <!-- country -->
         <select name="country" >
            <option value="">Select country</option>
            <option value="nepal">Nepal</option>
            <option value="india">India</option>
            <option value="us">US</option>
            <option value="uk">UK</option>
         </select>
        
         <input type="checkbox" name="subject[]" value="PHP" >PHP 
         <input type="checkbox" name="subject[]" value="Java" >Java 
         <input type="checkbox" name="subject[]" value="Database" >Database 
         <input type="checkbox" name="subject[]" value="Networking" >Networking 
        <!-- Submit button -->
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $fullName = $_POST['full_name'];
        $gender = $_POST['gender'];
        $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] :[];
        $country = $_POST['country'];
        $subjects = isset($_POST['subject'])? $_POST['subject'] : [];

        echo "<h2>Submitted Data:</h2>";
        echo "Name: $fullName <br>";
        echo "Gender: $gender <br>";
        echo "Country: $country <br>";
         echo "Hobbies are : <br>";
         
        if(!empty($hobbies)){
           foreach($hobbies as $hobbie){
            echo "  $hobbie  ";
           }
        }
          echo "<br>Subjects are are : <br>";
        if(!empty($subjects)){
              foreach($subjects as $subject){
            echo "  $subject  ";
        }
        
    }
    }
    ?>
</body>
</html>