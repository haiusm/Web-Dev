$(document).ready(function () {

    // Sign In Validation

    $(".btn_login").click(function () {

        var user_name = $('#login_user_name').val();
        var user_password = $('#login_user_password').val();

        if ((user_name.length == 0) || (user_name == "") || (user_password.length == 0) || (user_password == "")) {

            if (user_name.length == 0) {
                var user_name_err = '* You must enter a Username first';
                $('#user_name_err').text(user_name_err);
            } else {
                $('#user_name_err').text("");
            };

            if (user_password.length == 0) {
                var user_password_err = '* You must enter a Password first';
                $('#user_password_err').text(user_password_err);
            } else {
                $('#user_password_err').text("");
            };

        } else {

            var obj_login_data = {
                login_user_name: $('#login_user_name').val(),
                login_user_password: $('#login_user_password').val()
            }

            $.post("process/signin_process.php", obj_login_data, function (response) {
            
                if (response === "LoginSuccess=True") {

                    $('#div_error').css('display','block');
                    $('#div_error').text(response);

                    setTimeout(function(){
                        window.location.replace("dashboard.php");
                    }, 2000);
                    
                } else {
                    $('#div_error').css('display','block');
                    $('#div_error').text(response);
                };

            });

        };

    });


    $(".btn_new_acc").click(function () {
        $("#div_signup").css("display", "inline-block");

        var div_height = "calc(100% - " + $("#div_signup").outerHeight() / 2 + ")";
        $('#div_signup').css("top", div_height);
    });

    $("#btn_close").click(function () {
        $("#div_signup").hide();
    });

    $("input[name=user_gender]").change(function () {
        var opt_gender_custom = $("input[name=user_gender]:checked").val();

        if (opt_gender_custom == "custom") {
            $("#div_opt_gender_custom").css("display", "inline-block");

            var div_height = "calc(100% - " + $("#div_signup").outerHeight() / 2 + ")";
            $('#div_signup').css("top", div_height);

        } else {
            $("#div_opt_gender_custom").css("display", "none");
        };
    });

    // Sign Up

    // Sign Up Validation

    $("#btn_signup").click(function () {
        
        var first_name = $("input[name=first_name]").val();
        var last_name = $("input[name=last_name]").val();
        var user_name_signup = $("input[name=signup_user_name]").val();
        var user_password_signup = $("input[name=signup_user_password]").val();
        var user_dob_day = $("select[name=user_dob_day]").val();
        var user_dob_month = $("select[name=user_dob_month]").val();
        var user_dob_year = $("select[name=user_dob_year]").val();
        var user_dob = user_dob_year + "-" + user_dob_month + "-" + user_dob_day
        var signup_radio_gender = $("input[name=user_gender]:checked").val();
        var gender_custom_pronoun = $("select[name=gender_custom_pronoun]").val();
        var gender_custom = $("input[name=gender_custom]").val();

        if ((first_name.length == 0) || (last_name.length == 0) || (user_name_signup.length == 0) || (user_password_signup.length == 0) || (user_dob_day == null) || (user_dob_day == "day") || (user_dob_month == null) || (user_dob_month == "month") || (user_dob_year == null) || (user_dob_year == "year") || (signup_radio_gender == null)) {

            if (first_name.length == 0) {
                var first_name_err = '* You must enter a value in First Name';
                $('#first_name_err').text(first_name_err);
            } else {
                $('#first_name_err').text("");
            };

            if (last_name.length == 0) {
                var last_name_err = '* You must enter a value in Surname';
                $('#last_name_err').text(last_name_err);
            } else {
                $('#last_name_err').text("");
            };

            if (user_name_signup.length == 0) {
                var user_name_signup_err = '* You must enter a value in Username';
                $('#user_name_signup_err').text(user_name_signup_err);
            } else {
                $('#user_name_signup_err').text("");
            };

            if (user_password_signup.length == 0) {
                var user_password_signup_err = '* You must enter a value in Password';
                $('#user_password_signup_err').text(user_password_signup_err);
            } else {
                $('#user_password_signup_err').text("");
            };

            if (user_dob_day == null || user_dob_day == "day") {
                var user_dob_err = '* You must select a value from list of days';
                $('#user_dob_err').text(user_dob_err);

            } else if (user_dob_month == null || user_dob_month == "month") {
                var user_dob_err = '* You must select a value from list of months';
                $('#user_dob_err').text(user_dob_err);

            } else if (user_dob_year == null || user_dob_year == "year") {
                var user_dob_err = '* You must select a value from list of years';
                $('#user_dob_err').text(user_dob_err);

            } else {
                $('#user_dob_err').text("");
            };


            if (signup_radio_gender == null) {
                var signup_radio_gender_err = '* Please select an option for gender';
                $('#signup_radio_gender_err').text(signup_radio_gender_err);
            } else {
                $('#signup_radio_gender_err').text("");

                if (signup_radio_gender = "custom") {

                    if (gender_custom_pronoun == null || gender_custom_pronoun == "select your pronoun") {
                        var gender_custom_pronoun_err = '* You must select a value from list of pronouns';
                        $('#gender_custom_pronoun_err').text(gender_custom_pronoun_err);
                    } else {
                        $('#gender_custom_pronoun_err').text("");
                    };

                    if (gender_custom.length == 0) {
                        var gender_custom_err = '* You must enter a value in gender field';
                        $('#gender_custom_err').text(gender_custom_err);
                    } else {
                        $('#gender_custom_err').text("");
                    };
                };
            };

        } else {

            var signup_obj={
                first_name : $("input[name=first_name]").val(),
                last_name : $("input[name=last_name]").val(),
                signup_user_name : $("input[name=signup_user_name]").val(),
                signup_user_password : $("input[name=signup_user_password]").val(),
                user_dob_day : $("select[name=user_dob_day]").val(),
                user_dob_month : $("select[name=user_dob_month]").val(),
                user_dob_year : $("select[name=user_dob_year]").val(),
                user_dob : $("select[name=user_dob_year]").val() + "-" + $("select[name=user_dob_month]").val() + "-" + $("select[name=user_dob_day]").val(),
                user_gender : $("input[name=user_gender]:checked").val(),
                gender_custom_pronoun : $("select[name=gender_custom_pronoun]").val(),
                gender_custom : $("input[name=gender_custom]").val()
            }

            $.post("process/signup_process.php" ,signup_obj, function(response){
                
                if (response === "SignUpSuccess=True") {

                    $('#div_error').css('display','block');
                    $('#div_error').text(response);

                    setTimeout(function(){
                        window.location.replace("signin.php");
                    }, 2000);
                } else {

                    $('#div_error').css('display','block');
                    $('#div_error').text(response);

                };

            });



        };

    });


});