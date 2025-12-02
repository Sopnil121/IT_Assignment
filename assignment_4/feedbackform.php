<!-- Create a feedback form with fields: name, rating (1–5), and comment.
On submission:
Show the submitted data.
Use $_SERVER['REQUEST_METHOD'] to check if the form was posted.
 -->


<form action="" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" id="">
<br> <br>
   <select name="rating">

   <option value="" id="">-- Give rating -- </option>
   <option value="1" id="">1</option>
   <option value="2" id="">2</option>
   <option value="3" id="">3 </option>
   <option value="4" id="">4 </option>
   <option value="5" id="">5 </option>
</select>
<br> <br>
<textarea name="feedback" id="" rows="5" cols="40"></textarea>

<button type="submit" value="sumbit">submit</button>
</form>
<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['feedback'];
    echo "Your Feedback : <br>";

    echo "<br>";
    echo $name;
    echo "<br>";
    echo $rating;
    echo "<br>";
    echo $comment;
    exit();
}
?>