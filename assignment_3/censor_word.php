<!-- 9. Create a program that censors inappropriate words from a comment:
Replace bad words with asterisks (****)
Count how many words were censored
Display both original and censored text
    Given:    
    $comment = "This is a damn good product but the service is hell";
    $badWords = ["damn", "hell"];
    Expected Output:
    Original: This is a damn good product but the service is hell
    Censored: This is a **** good product but the service is ****
    Words censored: 2 -->
    <?php
        $comment = "This is a damn good product but the service is hell";

         $original = $comment;
        $counter=0;
        $badWords = ["damn", "hell"];

        foreach($badWords as $words){
            stripos($comment,$words);
            $counter++;
            $comment = str_ireplace($words,"****",$comment);

        }
        echo $original;
        echo"<br>";
        echo $comment;
        echo"<br>";
        echo"Words censored: " . $counter;


    ?>