    <?php
    $cities = ['Kathmandu', 'Pokhara', 'Lalitpur', 'Bhaktapur', 'Biratnagar'];

    //    printing first name
     echo"<b> printing First city <br></b>";
    echo $cities[0];
    echo "<br>";

    //    printing last name
    echo "<b> printing last city <br></b>";
    echo $cities[count($cities) - 1];
    echo "<br>";

    //  printing number of citis
    echo "<b> printing number of cities <br></b>";
  echo count($cities); 
  
//   Display the city at index 2
    echo"<br>City at index 2 $cities[2]";
    ?>