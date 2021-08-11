<?php
    session_start();

    include("mysql_conn.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $user_name=$_POST['login_user_name'];
        $user_password=$_POST['login_user_password'];

        if (empty($user_name) || $user_name=="" || empty($user_password) || $user_password==""){
            echo "Username or Password is empty, You must enter some values in both Username and password fields ";
        } else {

            $qry="SELECT * FROM tbl_users WHERE tbl_users.user_name='" . $user_name . "' AND tbl_users.user_password='" . $user_password . "';";

            $result = $conn->query($qry);

            if($result->num_rows>=1){

                echo "LoginSuccess=True";

                $row=$result->fetch_assoc();
      
                $_SESSION['is_logged_in']="True";
                $_SESSION['user_id']=$row['user_id'];
                $_SESSION['user_name']=$row['user_name'];
      
            } else {
                echo "LoginSuccess=False";
            };

        };

    } else {
        exit();
    };
?>
