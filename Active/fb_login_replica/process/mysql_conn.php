<?php
$host_name="localhost";
$user_name="admin";
$user_password="AdmiN@123";
$db_name="users";

$conn=new mysqli($host_name, $user_name, $user_password, $db_name);

if ($conn->connect_errno){
    echo "Failed to connect to MySQL" . $conn->connect_error;
    exit();
};


function mysql_add($table_name, $table_fields, $form_fields){
    $add_qry="INSERT INTO " . $table_name . "(" . $table_fields . ") VALUES(" . $form_fields . ");";
    Global $conn;
    $qry_result=$conn->query($add_qry);

    if($qry_result===TRUE){
        echo "New record created successfully.";
    } else {
        echo "Error" . $qry_result . "<br>" . $conn->error;
    };
}

?>