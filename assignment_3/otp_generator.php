<!-- 12. Create an OTP (One Time Password) generator:
Generate a 6-digit OTP
Generate 4 random OTPs
Display all OTPs    
   Expected Output:
    OTP Generator
    OTP 1: 482759
    OTP 2: 937264
    OTP 3: 156829
    OTP 4: 729481 -->
<?php 
function otpGenetator(){
    return rand(100000,999999);
}

  echo"OTP Generator<br>";

for($i =1; $i<= 4; $i++){
    $otp = otpGenetator();
    echo"<br>OTP 1: ". $otp;
}
?>