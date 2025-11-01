<!-- Write a PHP program to display numbers 1–20, but skip even numbers using continue. -->
 <?php
$i;
for($i=1;$i<=20;$i++){
    if($i % 2==0){
        continue;
    }else{
        echo("$i   ");
    }
}
?>