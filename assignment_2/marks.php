<!-- Write a PHP program that accepts a student’s marks and prints the grade according to the following rules using if…elseif…else
90–100: A
75–89: B
60–74: C
40–59: D
Below 40: Fail
 -->
<?php
$marks=29;
if($marks>=90 && $marks<=100){
    echo("A");
}elseif($marks>=75 && $marks<=89){
    echo("B");
}elseif($marks>=60 && $marks<=74){
    echo("C");
}elseif($marks>=40 && $marks<=59){
    echo("D");
}elseif($marks>=0 && $marks<=40){
    echo("Fail");
}
?>
