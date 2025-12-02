<!-- Design a menu page (menu.php) with 3 links:
?page=home
?page=about
?page=contact
Using $_GET['page'], display the respective content dynamically (without multiple files). -->

<?php
   $page = $_GET['page'] ?? 'home';

   if($page =='home'){
    echo"Welcome To home Page";
   }
   elseif($page=='about'){
    echo"Welcome To about Page";
   }
   else{
        echo"Welcome To Contact Page";
   }
?>
<br><br><br>

<a href="menu.php?page=home">Home</a>
<a href="menu.php?page=about">About</a>
<a href="menu.php?page=contact">Contact</a>