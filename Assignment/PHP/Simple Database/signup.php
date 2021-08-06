<?php
include("process/mysql_conn.php");

session_start();
if(!isset($_SESSION['$is_logged_in']) && $_SESSION['$is_logged_in']="True"){
    header("Location:index.php");
}

$firstname = "";
$lastname = "";
$username = "";
$email = "";
$gender = "";
$password = "";
$profile_picture = "";

$firstname_err = "";
$lastname_err = "";
$username_err = "";
$email_err = "";
$gender_err = "";
$password_err = "";
$profile_picture_err = "";

if ($_SERVER["REQUEST_METHOD"] = "POST") {

    if (isset($_POST["btn_register"])) {

        $reg_date = $_POST["reg_date"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $profile_picture = $_FILES["profile_picture"];

        if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($gender) || empty($password) || !isset($profile_picture) || empty($profile_picture["name"])) {

            if (empty($firstname)) {
                $firstname_err = "* First Name Missing";
            }

            if (empty($lastname)) {
                $lastname_err = "* Last Name Missing";
            }

            if (empty($username)) {
                $username_err = "* Username Missing";
            }

            if (empty($email)) {
                $email_err = "* Email is Missing";
            }


            if (empty($gender)) {
                $gender_err = "* Gender is Missing";
            }

            if (empty($password)) {
                $password_err = "* Password is Missing";
            }

            if (!isset($profile_picture) || empty($profile_picture["name"])) {
                $profile_picture_err = "* Profile Picture is Missing";
            }
        } else {
            $tbl_fields = array("reg_date", "first_name", "last_name", "user_name", "email", "password", "gender");
            $form_fields = array("'$reg_date'", "'$firstname'", "'$lastname'", "'$username'", "'$email'", "'$password'", "'$gender'");
            add_record("tbl_user_reg_det", $tbl_fields, $form_fields);

            $firstname = "";
            $lastname = "";
            $username = "";
            $email = "";
            $gender = "";
            $password = "";
            $profile_picture = "";
        }
    }
}

?>

<html>

<head>
    <title>
        User Registration
    </title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div id="div_container">
        <div class="div_container_sub_left">
            <img src="images/div_bg.jpg">
        </div>
        <div class="div_container_sub_right">
            <h1>REGISTRATION FORM</h1>

            <form action="#" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="First Name" name="firstname" value="<?php echo $firstname ?>" />
                <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $lastname ?>" style="margin-left: 10px;" />
                <div class="input_error"><?php echo $firstname_err ?></div>
                <div class="input_error"><?php echo $lastname_err ?></div>
                <br />
                <Input type="text" placeholder="Username" name="username" value="<?php echo $username ?>" />
                <i class="fas fa-user"></i>
                <div class="input_error"><?php echo $username_err ?></div>
                <br />
                <input type="email" placeholder="Email Address" name="email" value="<?php echo $email ?>" />
                <i class="fas fa-envelope"></i>
                <div class="input_error"><?php echo $email_err ?></div>
                <br />
                <select name="gender">
                    <option value="Gender" hidden selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <div class="input_error"><?php echo $gender_err ?></div>
                <br />
                <input type="password" placeholder="Password" name="password" value="<?php echo $password ?>" />
                <i class="fas fa-lock"></i>
                <div class="input_error"><?php echo $password_err ?></div>
                <br />

                <!-- File Upload Button Handling -->
                <span style="white-space: nowrap;"><label for="profile_picture" class="lbl_select_profile_pic">Choose Picture</label>
                    <input type="file" name="profile_picture" id="profile_picture" value="" style="margin-bottom: 0px;" /></span>
                <div class="input_error"><?php echo $profile_picture_err ?></div>
                <!-- <span style="font-size: 13px;">Choose Profile Picture</span> -->

                <!-- Hidden Date field -->
                <input type="hidden" name="reg_date" value="<?php echo date('D, M Y'); ?>" readonly="readonly" style="margin-bottom: 0px;" />
                <center><button type="submit" name="btn_register">Register &nbsp;<i class="fa fa-arrow-right"></i></button></center>
            </form>
        </div>
    </div>


</body>

<footer>
    <div class="div_footer">
    <a href="index.php"><button>HOME</button></a>
        <a href="login.php"><button>LOGIN</button></a>
        <!-- <a href="user_reg_list.php"><button>VIEW ALL RECORDS</button></a> -->
    </div>
</footer>

</html>