<?php
    session_start();

    include("mysql_conn.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $signup_user_name = $_POST['signup_user_name'];
        $signup_user_password = $_POST['signup_user_password'];
        $user_dob_day = $_POST['user_dob_day'];
        $user_dob_month = $_POST['user_dob_month'];
        $user_dob_year = $_POST['user_dob_year'];
        $user_dob = $user_dob_year . "-" . $user_dob_month . "-" . $user_dob_day;
        $user_gender = $_POST['user_gender'];
        $gender_custom_pronoun = $_POST['gender_custom_pronoun'];
        $gender_custom = $_POST['gender_custom'];

        if (empty($first_name) || empty($last_name) || empty($signup_user_name) || empty($signup_user_password) || empty($user_dob_day) || empty($user_dob_month) || empty($user_dob_year) || empty($user_gender)){
            echo "Fields are missing, Please fill all fields";
        } else {

            $ins_qry="INSERT INTO tbl_users (first_name, last_name, user_name, user_password, user_dob, user_gender, gender_custom_pronoun, gender_custom) VALUES ('$first_name', '$last_name', '$signup_user_name', '$signup_user_password', '$user_dob', '$user_gender', '$gender_custom_pronoun', '$gender_custom');";

            $sel_qry="SELECT user_name from tbl_users WHERE user_name='" . $signup_user_name . "';";

            $sel_result = $conn->query($sel_qry);

            if($sel_result->num_rows>0){

                echo "Duplicate Found";

            } else if($conn->query($ins_qry)===TRUE){

                echo "SignUpSuccess=True";

            } else {
                
                echo "SignUpSuccess=False";
                echo "<br>";
                echo "Error:" . $ins_qry . "<br>" . $conn->error;
            };
            };

        

    } else {
        exit();
    };
?>
