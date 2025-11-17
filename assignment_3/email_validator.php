<!-- 8. Write a program to validate an email address:
 Check if it contains "@" symbol
 Extract the part before @ (username)
 Extract the part after @ (domain)
 Convert email to lowercase for storage
   Test with: `$email = "RAM.Sharma@EXAMPLE.com"; 
   Expected Output: 
    Original: RAM.Sharma@EXAMPLE.com
    Cleaned: ram.sharma@example.com
    Valid email format
    Username: ram.sharma
    Domain: example.com -->

    <?php
    $email = "RAM.Sharma@EXAMPLE.com<br>"; 

    $trimmed_email = trim($email);
    $isValid = false;
    $length = strlen($trimmed_email);

    for($i = 0; $i<$length; $i++){
        if($trimmed_email[$i]=="@"){
            $isValid = true;
            break;
        }
    }

    if($isValid){
        echo"Original: RAM.Sharma@EXAMPLE.com<br>";
        $email_lowercase = strtolower($trimmed_email);
        echo "Cleaned: ".$email_lowercase."<br>";
        // echo"Cleaned: ram.sharma@example.com<br>";
        echo"Valid email format :<br>";

        $email_seperator = explode("@",$email_lowercase);

        
        echo "Username : ". $email_seperator[0]."<br>";
        echo "Domain : ". $email_seperator[1]."<br>";

    }
    ?>
