<?php
    echo "<h1>PROFILE</h1>";
    echo "<strong>Picture:</strong> " . $_POST["profile_pic"] . "<br />";
    echo "<strong>First Name:</strong> " . $_POST["fname"] . "<br />";
    echo "<strong>Last Name:</strong> " . $_POST["lname"] . "<br />";
    echo "<strong>Contact No (Home):</strong> " . $_POST["ph_home"] . "<br />";
    echo "<strong>Contact No (Office):</strong> " . $_POST["ph_off"] . "<br />";
    echo "<strong>Gender:</strong> " . $_POST["gender"] . "<br />";
    echo "<strong>Country:</strong> " . $_POST["country"] . "<br />";
    echo "<strong>Email:</strong> " . $_POST["email"] . "<br />";
    echo "<strong>Password:</strong> " . $_POST["password"] . "<br />";
    echo "<strong>Description:</strong> " . $_POST["desc"] . "<br />";
?>