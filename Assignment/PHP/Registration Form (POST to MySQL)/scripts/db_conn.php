<?php
$host_name="localhost";
$user_name="admin";
$user_password="AdmiN@123";
$db_name="users";

$conn= new mysqli($host_name, $user_name, $user_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>