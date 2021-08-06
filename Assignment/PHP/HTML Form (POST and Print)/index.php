<html>

<head>
    <title>
        User Registration
    </title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div id="div_container">
        <div class="div_container_sub_left">
            <img src="images/div_bg.jpg">
        </div>
        <div class="div_container_sub_right">
            <h1>REGISTRATION FORM</h1>
            <form action="process/index_process.php" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="First Name" name="firstname" />
                <input type="text" placeholder="Last Name" name="lastname" style="margin-left: 10px;" />
                <br />
                <Input type="text" placeholder="Username" name="username" required />
                <i class="fas fa-user"></i>
                <br />
                <input type="email" placeholder="Email Address" name="email" required />
                <i class="fas fa-envelope"></i>
                <br />
                <select name="gender">
                    <option value="Gender" hidden selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <br />
                <input type="password" placeholder="Password" name="password"  required />
                <i class="fas fa-lock"></i>
                <br />

                <!-- File Upload Button Handling -->
                <span style="white-space: nowrap;"><label for="profile_picture" class="lbl_select_profile_pic">Choose Picture</label><input type="file" name="profile_picture" id="profile_picture" style="margin-bottom: 0px;" /></span>
                <!-- <span style="font-size: 13px;">Choose Profile Picture</span> -->
                
                <!-- Hidden Date field -->
                <input type="hidden" name="reg_date" value="<?php echo date('D, M Y'); ?>" readonly="readonly" style="margin-bottom: 0px;" />
                
                <center><button type="submit" name="btn_register">Register &nbsp;<i class="fa fa-arrow-right"></i></button></center>
            </form>
        </div>
    </div>
</body>

</html>