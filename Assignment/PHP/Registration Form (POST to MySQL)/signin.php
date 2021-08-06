<?php
include("scripts/db_conn.php");

session_start();
if(isset($_SESSION['is_logged_in'])){
    header("Location:dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Sign In</title>

</head>

<body>
    <div class="container">

        <h1>SIGN IN HERE!</h1>

        <!-- PHP Script Start -->

        <?php

        if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit_button']))) {
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
        }
        
        if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit_button']))) {

        if (empty($user_email) || empty($user_password)) {

            if (empty($user_email)) {
                $user_email_err = "* You must enter an email to proceed";

                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo  $user_email_err;
                echo "</div>";

            } else if (empty($user_password)) {
                $user_password_err = "* Password is not Optional, You must provide a valid Password";

                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo  $user_password_err;
                echo "</div>";
            }
        } else {


            $select_qry = "SELECT * FROM tbl_users WHERE user_email= '$user_email' AND user_password= md5(sha1('$user_password'))";
            $select_qry_result = $conn->query($select_qry);

            if ($select_qry_result->num_rows>0){
                echo "<div class='div_query_message'>";

                echo "<span style='margin-bottom:1rem; display: inline-block;'>";
                echo "<i class='fas fa-check-circle' style='color: orange; margin-right: 2rem;'></i>";
                echo "Congratulations, Account has been created";
                echo "</span>";
                echo "<br />";
                
                echo "<i class='fas fa-directions' style='color: yellow; margin-right: 2rem;'></i>";
                echo "Redirecting to Signin Page...";
                
                echo "</div>";

                $select_qry_row = mysqli_fetch_assoc($select_qry_result);

                $_SESSION['is_logged_in']=True;
                $_SESSION['user_email']= $user_email;

                $user_email = "";
                $user_password = "";
                
                unset($_POST['submit_button']);
                
                header( "refresh:1; url=dashboard.php");
            }
             else {
                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo "User name or password is incorrect";
                echo "</div>";
            }

            $conn->close();
        }
    }
        ?>

        <!-- PHP Script End -->

        <form action="signin.php" method="POST" autocomplete="off">
            <input type="email" name="user_email" placeholder="Email" autocomplete="off" value="<?php if (isset($user_email)) {
                                                                                                    echo $user_email;
                                                                                                } ?>" />
            <br />
            <input type="password" name="user_password" placeholder="Password" autocomplete="off">
            <br>
            <button id="submit_button" name="submit_button" type="submit">SIGN IN</button>
            <br>
        </form>
    </div>
    <div id="div_footer">           
            <p>No account? &nbsp;&nbsp;<a href="signup.php">Create one!</a></p>
</body>

</html>