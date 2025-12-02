<?php
echo "The client’s IP address : ".$_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "The browser and OS : ".$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "The server name ". $_SERVER['SERVER_NAME'];
?>