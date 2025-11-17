<?php

function createProfile($name, $role = "student", $status = "active") {

    echo "Name: $name<br>";
    echo "Role: $role<br>";
    echo "Status: $status<br><br>";
}

// 1. Only name
createProfile("Ram");

// 2. Name and role
createProfile("Sita", "Teacher");

// 3. All three parameters
createProfile("Hari", "Admin", "inactive");

?>
