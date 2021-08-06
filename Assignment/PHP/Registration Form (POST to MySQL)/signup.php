<?php include("scripts/db_conn.php"); 

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
    <title>Signup</title>


</head>

<body>
    <div class="container">

        <h1>JOIN US!</h1>

        <!-- PHP Script Start -->
        <?php
        if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit_button']))) {

            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];

            $user_dob_year = $_POST['user_dob_year'];
            $user_dob_month = $_POST['user_dob_month'];
            $user_dob_day = $_POST['user_dob_day'];
            $user_dob_part = $user_dob_year . '-' . $user_dob_month . '-' . $user_dob_day;

            $user_dob = $_POST['user_dob'] = $user_dob_part;
            $submit_date = $_POST['submit_date'];
        }

        if (isset($_POST['is_agreed'])) {
            $is_agreed = True;
        } else {
            $is_agreed = False;
        }

        if (isset($_POST['submit_button']) && !empty($user_email)) {
            $select_qry = "SELECT user_email FROM tbl_users WHERE user_email='" . $user_email . "';";

            if ($conn->query($select_qry) == TRUE) {
                $select_qry_result = $conn->query($select_qry);
                $select_email_count = $select_qry_result->num_rows;
            } else {
                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo "Error: " . $select_qry . "<br>" . $conn->error;
                echo "</div>";
            }
        }

        global $select_email_count;

        if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit_button']))) {

        if (empty($user_email) || $select_email_count >= 1 || empty($user_password) == True || strlen($user_password) <= 8 || empty($user_dob) || $user_dob == "--" || empty($submit_date) || empty($is_agreed) || $is_agreed == 0) {

            if (empty($user_email)) {
                $user_email_err = "* You must enter an email to proceed";

                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo  $user_email_err;
                echo "</div>";
            } else if ($select_email_count >= 1) {
                $user_email_err = "* An account with this email already exists";

                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo  $user_email_err;
                echo "</div>";
            } else if (empty($user_password)) {
                $user_password_err = "* You must provide a valid Password";

                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo  $user_password_err;
                echo "</div>";
            } else if (strlen($user_password) <= 8) {

                $user_password_err = "* Password must be longer than 8 characters";

                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo  $user_password_err;
                echo "</div>";
            } else if ($user_dob == "" || $user_dob == "--") {
                $user_dob_err = "* Date of Birth is Missing";

                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo  $user_dob_err;
                echo "</div>";
            } else if (empty($is_agreed) || $is_agreed == 0) {
                $is_agreed_err = "* You must agreed with term and conditions";

                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo  $is_agreed_err;
                echo "</div>";
            }
        } else {

                $add_qry = "INSERT INTO tbl_users (user_email, user_password, user_dob, submit_date, is_agreed) VALUES('$user_email',md5(sha1('$user_password')),'$user_dob','$submit_date','$is_agreed')";
            if ($conn->query($add_qry) == TRUE) {

                echo "<div class='div_query_message'>";
                
                echo "<span style='margin-bottom:1rem; display: inline-block;'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 2rem;'></i>";
                echo "Congratulations, Account has been created";
                echo "</span>";
                echo "<br />";
                
                echo "<i class='fas fa-directions' style='color: yellow; margin-right: 2rem;'></i>";
                echo "Redirecting to Dashboard...";
                
                echo "</div>";

                unset($_POST);

                $user_email = "";
                $user_password = "";
                $user_dob = "";
                $submit_date = "";
                $is_agreed = "";

                header( "refresh:1; url=signin.php");

            } else {
                echo "<div class='div_query_message'>";
                echo "<i class='fas fa-exclamation-triangle' style='color: orange; margin-right: 20px;'></i>";
                echo "Error: " . $add_qry . "<br>" . $conn->error;
                echo "</div>";
            }

            $conn->close();
        }
    }
        ?>

        <!-- PHP Script End -->

        <form action="signup.php" method="POST" autocomplete="off">
            <input type="email" name="user_email" placeholder="Email" autocomplete="off" value="<?php if (isset($user_email)) {
                                                                                                    echo $user_email;
                                                                                                } ?>" />
            <br>
            <input type="password" name="user_password" placeholder="Password" autocomplete="off"  value="<?php if (isset($user_password)) {
                                                                                                    echo $user_password;
                                                                                                } ?>" />
            <br>
            <span style="white-space:nowrap; margin:1.5rem 0px; display: block;">
                <span style="float: left; padding: 10px 0px;"><label for="user_dob_day">Date Of Birth </label></span>
                <span style="float: right;">
                

<script>

function get_month_value() {
  var selected_month = document.getElementsByName("user_dob_month")[0].value;
  return selected_month;
}

function get_year_value() {
  var selected_year = document.getElementsByName("user_dob_year")[0].value;
  return selected_year;
}
</script>

                <?php
                    // $days_in_selected_month=cal_days_in_month(CAL_GREGORIAN,"<script> document.getElementsByName("user_dob_year")[0].value;;</script>","<script>get_year_value();</script>");
                    $days_in_selected_month=31;
?>
                    <?php
                    echo '<select id="user_dob_day" name="user_dob_day" autocomplete="off">' . "\n";
                    echo "<option value='' selected hidden>Day</option>";
                    for ($i_day = 1; $i_day <= $days_in_selected_month; $i_day++) {
                        $selected = ($i_day == $user_dob_day ? ' selected' : '');
                        echo '<option value="' . $i_day . '" . "' . $selected .'>' . $i_day . '</option>' . "\n";
                    }
                    echo '</select>' . "\n";
                    ?>

                   
                    <?php
                    echo '<select id="user_dob_month" name="user_dob_month" autocomplete="off" onChange="get_month_value()">' . "\n";
                    echo "<option value='' selected hidden>Month</option>";
                    for ($i_month = 1; $i_month <= 12; $i_month++) {
                        $selected = ($i_month == $user_dob_month ? ' selected' : '');
                        echo '<option value="' . $i_month . '" . "' . $selected . '>' . date('F', mktime(0, 0, 0, $i_month, 01, 01)) . '</option>' . "\n";
                    }
                    echo '</select>' . "\n";
                    ?>

                    <?php
                    $year_start  = 1941;
                    $year_end = 2006; // current Year

                    echo '<select id="user_dob_year" name="user_dob_year" autocomplete="off" onChange="get_year_value()">' . "\n";
                    echo "<option value='' selected hidden>Year</option>";
                    for ($i_year = $year_start; $i_year <= $year_end; $i_year++) {
                        $selected = ($i_year == $user_dob_year ? ' selected' : '');
                        echo '<option value="' . $i_year . '" . "' . $selected .'>' . $i_year . '</option>' . "\n";
                    }
                    echo '</select>' . "\n";
                    ?>
                


                    <br>
                    <input type="date" name="user_dob" value="<?php if (isset($user_dob_part)) {echo $user_dob_part;} ?>" autocomplete="off" hidden /> <br>

                </span>
                <br />

                <br>
            </span>
            <span style="white-space: nowrap; float:left; margin-bottom: 1rem; display: block;">
                <?php
                if (isset($_POST['is_agreed'])) {
                    echo "<input type='checkbox' id='is_agreed' name='is_agreed' style='width: auto; margin-right: 17px; transform:Scale(1.75);' autocomplete='off' checked>";
                } else {
                    echo "<input type='checkbox' id='is_agreed' name='is_agreed' style='width: auto; margin-right: 17px; transform:Scale(1.75);' autocomplete='off'>";
                }
                ?>
                <label for="is_agreed">Agree with the Terms & Conditions</label>
            </span>

            <br>
            <input type="date" name="submit_date" value="<?php echo date('Y-m-d') ?>" hidden autocomplete="off" /> <br>
            <br>
            <button id="submit_button" name="submit_button" type="submit" style="margin-top: 1rem;">SIGN UP</button>
        </form>
    </div>
<div id="div_footer">           
            <p>Existing User? &nbsp;&nbsp;<a href="signin.php">Signin Here!</a></p>
</div>
</body>

</html>