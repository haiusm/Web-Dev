<html>

<head>
    <title>
        User Registration
    </title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
    <div id="div_container">
        <div class="div_container_sub_left">
            <img src="../images/div_bg.jpg">
        </div>
        <div class="div_container_sub_right">
            <h1>REGISTRATION FORM</h1>
            <div class="div_container_sub_right_form_input">

<?php

session_start();
if(!isset($_SESSION['$reg_id'])){
    header("Location:index.php");
}

function user_name_handling($fname, $lname){
if(empty($fname) && !empty($lname)){
    $fullname=$lname;
}
else if(empty($lname) && !empty($fname)){
    $fullname=$fname;
}
else if(empty($fname) && empty($lname)){
    $fullname="N/A";
}
else{
$fullname=$fname . " " . $lname;
}
return $fullname;
}

$fullname = user_name_handling($_POST["firstname"], $_POST["lastname"]);

$username=$_POST["username"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$reg_date=$_POST["reg_date"];

// Start: Profile Picture Handling

$str_find=[" ","(",")","-","&"];
$str_replace=["_","_","_","","and"];
$profile_image_name=strtolower(str_replace($str_find,$str_replace,$_FILES["profile_picture"]["name"]));

$profile_image_size=$_FILES["profile_picture"]["type"];
$profile_image_tmp_name=$_FILES["profile_picture"]["tmp_name"];
$profile_image_error=$_FILES["profile_picture"]["error"];
$profile_image_size=$_FILES["profile_picture"]["size"];

$profile_image_local_path="../images/form_uploads/" . $profile_image_name;

move_uploaded_file($profile_image_tmp_name, $profile_image_local_path);

// End: Profile Picture Handling

echo "<img class='profile_picture' src='" . $profile_image_local_path . "' alt='Profile Picture'>"; 
echo "<strong>Name:</strong> <span style='text-align: right; float:right'>" . $fullname . "</span><br />";
echo "<strong>Username:</strong> <span style='text-align: right; float:right'>" . $username . "</span><br />";
echo "<strong>Email:</strong> <span style='text-align: right; float:right'>" . $email . "</span><br />";
echo "<strong>Gender:</strong> <span style='text-align: right; float:right'>" . $gender . "</span><br />";
echo "<strong>Register on:</strong> <span style='text-align: right; float:right'>" . $reg_date . "</span>";

?>

</div>
        </div>
    </div>
</body>

<footer>
    <div class="div_footer">
    <a href="index.php"><button>HOME</button></a>
        <a href="user_reg_add.php"><button>ADD NEW RECORD</button></a>
        <a href="user_reg_list.php"><button>VIEW ALL RECORDS</button></a>
    </div>
</footer>

</html>