<?php
include("process/mysql_conn.php");


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

    if (isset($_POST["btn_login"])) {

        $reg_date = $_POST["reg_date"];
        $email = $_POST["email"];
        $password = $_POST["password"];
      
        if (empty($email) || empty($password)) {

            if (empty($email)) {
                $email_err = "* Email is Missing";
            }

            if (empty($password)) {
                $password_err = "* Password is Missing";
            }

        } else {
                $sql_qry="SELECT * FROM tbl_user_reg_det WHERE email='$email' AND password='$password'";
                $sql_qry_result= $conn->query($sql_qry);


                if ($sql_qry_result->num_rows>=1){
                    $sql_qry_rows = mysqli_fetch_assoc($sql_qry_result);

                    $user_id=$sql_qry_rows['reg_id'];
                    $user_name=$sql_qry_rows['user_name'];
                    $user_email=$sql_qry_rows['email'];
                    
                    session_start();
                    $_SESSION['is_logged_in']="True";
                    $_SESSION['user_id']=$user_id;
                    $_SESSION['user_name']=$user_name;


                    echo "<span style='color:red; line-height:2; text-align:center; display: block; border: 1px solid red; background: yellow; margin: 10px auto; width: 50%; '>Logging into your account...</span>";


                    header("Location: dashboard.php");

                }else{

                    echo "<span style='color:red; line-height:2; text-align:center; display: block; border: 1px solid red; background: yellow; margin: 10px auto; width: 50%; '>User name or Password mismatched</span>";

                }
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
            <h1>USER LOGIN</h1>

            <form action="#" method="POST" enctype="multipart/form-data">
              
                <input type="email" placeholder="Email Address" name="email" value="<?php echo $email ?>" />
                <i class="fas fa-envelope"></i>
                <div class="input_error"><?php echo $email_err ?></div>
                <br />
                <input type="password" placeholder="Password" name="password" value="<?php echo $password ?>" />
                <i class="fas fa-lock"></i>
                <div class="input_error"><?php echo $password_err ?></div>
                <br />

                <input type="hidden" name="reg_date" value="<?php echo date('D, M Y'); ?>" readonly="readonly" style="margin-bottom: 0px;" />
                <center><button type="submit" name="btn_login">Login &nbsp;<i class="fa fa-arrow-right"></i></button></center>
                <div class="div_signup_heading">Don’t have an account? <a href="signup.php">Create an account.</a></div>
            </form>
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