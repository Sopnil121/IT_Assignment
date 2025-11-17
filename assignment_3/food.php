    <?php
    $favFoods =array("Rice","Roti","Naan," ,"Butterchicken","chole");

    $number = 1;  
    foreach($favFoods as $food){
        echo $number . ". $food <br>";
        $number ++;
    }

    ?>