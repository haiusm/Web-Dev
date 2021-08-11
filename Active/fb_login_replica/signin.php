<?php
session_start();
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']==TRUE){
header("Location: dashboard.php");
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/styles.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="scripts/script.js"></script>
    
    <title>Login Form</title>
</head>

<body>

<div id="div_error"><i class="bi bi-info-circle-fill" style="margin: 0 1.5rem; color: red;"></i>

</div>

    <div id="container">
        <div class="div_text">
            <h1>facebook</h1>
            Facebook helps you connect and share with the people in your life
        </div>
        <!-- SIGN IN FORM -->
        <div class="div_form">
            <form action="" method="POST">
                <input type="text" id="login_user_name" name="login_user_name" placeholder="Email address or phone number" class="full_size">
                <div id="user_name_err" class="div_input_err"></div>

                <input type="password" id="login_user_password" name="login_user_password" placeholder="Password" class="full_size">
                <div id="user_password_err" class="div_input_err"></div>

                <input type="button" value="Log in" class="btn_login" name="btn_login">
            </form>

            <span style="font-size: 1.5rem;"><a href="forgot_password.php">Forgotten password?</a></span>
            <hr>
            <button class="btn_new_acc" name="btn_new_acc">Create New Account</button>

        </div>
    </div>

    <!-- SIGN UP FORM -->
    <div id="div_signup">
        <i class="fas fa-times-circle" id="btn_close"></i>

        <h1>Sign Up</h1>
        <span style="display:inline-block; margin: 1rem auto; font-size: 1.5rem;">It's quickly and easy.</span>
        <hr>

        <form action="" method="POST">

            <input type="text" name="first_name" class="half_size" placeholder="First name">
            <input type="text" name="last_name" class="half_size" placeholder="surname">
            <div id="first_name_err" class="div_input_err"></div>
            <div id="last_name_err" class="div_input_err"></div>
            <input type="text" name="signup_user_name" class="full_size" placeholder="Mobile number or email address">
            <div id="user_name_signup_err" class="div_input_err"></div>
            <input type="password" name="signup_user_password" class="full_size" placeholder="New password">
            <div id="user_password_signup_err" class="div_input_err"></div>
            <p class="p_fullsize"><label for="">Date of birth</label></p>
            <?php
            echo "<select name='user_dob_day'>" . "\n";
            echo "<option value='day' hidden selected>Day</option>" . "\n";
            for ($i_day = 1; $i_day <= 31; $i_day++) {
                echo "<option value='$i_day'>" . $i_day . "</option>" . "\n";
            };
            echo "</select>" . "\n";
            ?>

            <?php
            echo "<select name='user_dob_month'>" . "\n";
            echo "<option value='month' hidden selected>Month</option>" . "\n";
            for ($i_month = 1; $i_month <= 12; $i_month++) {
                echo "<option value='$i_month'>" . date('F', mktime(0, 0, 0, $i_month)) . "</option>" . "\n";
            };
            echo "</select>" . "\n";
            ?>

            <?php
            echo "<select name='user_dob_year'>" . "\n";
            echo "<option value='year' hidden selected>Year</option>" . "\n";
            for ($i_year = 1940; $i_year <= 2010; $i_year++) {
                echo "<option value='$i_year'>" . $i_year . "</option>" . "\n";
            };
            echo "</select>" . "\n";
            ?>
            <div id="user_dob_err" class="div_input_err"></div>

            <br>
            <p class="p_fullsize"><label for="">Gender</label></p>
            <div class="div_signup_radio_wrap"><input type="radio" class="user_gender" name="user_gender" value="female">Female</div>
            <div class="div_signup_radio_wrap"><input type="radio" class="user_gender" name="user_gender" value="male">Male</div>
            <div class="div_signup_radio_wrap"><input type="radio" class="user_gender user_gender_custom" name="user_gender" value="custom">Custom</div>
            <div id="signup_radio_gender_err" class="div_input_err"></div>

            <div id="div_opt_gender_custom">
                <select name="gender_custom_pronoun" id="gender_custom" class="full_size" style="margin: 1rem auto;"><br>
                    <option value="select your pronoun" hidden selected>Select your pronoun</option>
                    <option value="she: \'wish her a happy birthday!\'">She: "Wish her a happy birthday!"</option>
                    <option value="he: \'wish him a happy birthday!\'">He: "Wish him a happy birthday!"</option>
                    <option value="they: \'wish them a happy birthday!\'">They: "Wish them a happy birthday!"</option>
                </select>
                <div id="gender_custom_pronoun_err" class="div_input_err"></div>

                <p>Your pronouns is visible to everyone</p>
                <input type="text" placeholder="Gender" class="full_size" style="margin: 1rem auto;" name="gender_custom">
                <div id="gender_custom_err" class="div_input_err"></div>

            </div>

            <p class="p_fullsize">By clicking Sign Up, you agree to our <a href="#">Terms</a>,<a href="#">Data Plicy</a> and <a href="#">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</p>
            <p style="text-align: center;">
                <input type="button" value="Sign Up" name="btn_signup" id="btn_signup">
            </p>
        </form>
    </div>

</body>

</html>