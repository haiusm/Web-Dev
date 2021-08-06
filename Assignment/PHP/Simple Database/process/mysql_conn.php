<?php
$server_name="localhost";
$user_name="admin";
$user_password="AdmiN@123";
$db_name="user_reg";

$conn= new mysqli($server_name, $user_name, $user_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function add_record($tbl_name, $tbl_field_names, $form_field_names){

    $tbl_fields = implode(", ", array_values($tbl_field_names));
    $form_fields = implode(", ", array_values($form_field_names));


    $sql_qry_ins="INSERT INTO " . $tbl_name . " (" . $tbl_fields . ") VALUES (" . $form_fields . ")";
    
    global $conn;

    if ($conn->query( $sql_qry_ins) === TRUE) {

        echo "<span style='color:red; line-height:2; text-align:center; display: block; border: 1px solid red; background: yellow; margin: 10px auto; width: 50%; '>Form Submitted Successfully <a href='login.php'><button style='padding:5px 20px; margin-left: 25px; background: transparent; border:0px solid gray; text-decoration: underline; cursor: pointer;'>LOGIN NOW</button></a></span>";

      } else {
        echo "Error: " .  $sql_qry_ins . "<br>" . $conn->error;
      }
      
      $conn->close();

}

// DELETE RECORD - USER REGISTRATION

function delete_selected_rec($tbl_name, $field_name, $field_value){

    global $conn;

// sql to delete a record
$qry_sql = "DELETE FROM " . $tbl_name . " WHERE " . $field_name . "=" . $field_value .";";

if ($conn->query($qry_sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

// $conn->close();

}


// VIEW RECORDS - USER REGISTRATION

function show_record_all($tbl_name){

    $qry_sql="SELECT * FROM " . $tbl_name . ";";

    global $conn;

    $qry_sql_result = $conn->query($qry_sql);

    echo "<table class='user_reg_view_table'>";       
    echo "<tr><th>USER ID</th><th>REG. DATE</th><th>FIRST NAME</th><th>LAST NAME</th><th>USER NAME</th><th>EMAIL</th><th>PASSWORD</th><th>GENDER</th><th>EDIT</th><th>DELETE</th></tr>";

    if (mysqli_num_rows($qry_sql_result) > 0) {
    
        while($row = mysqli_fetch_assoc($qry_sql_result)) {
           
            echo "<tr><td>" . $row['reg_id'] . "</td><td>" . $row['reg_date'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name']  . "</td><td>" . $row['user_name']  . "</td><td>" . $row['email']  . "</td><td>" . $row['password']  . "</td><td>" . $row['gender']  . "</td><td><a href='user_reg_list.php?edit_reg_id=" . $row['reg_id'] . "'>Edit</a></td><td><a href='user_reg_list.php?delete_reg_id=" . $row['reg_id'] . "'>Delete</a></td></tr>";
        }
    } 
    else
    {
        echo "0 Results Found";
    }

    echo "</table>";

    // $conn->close();

}
