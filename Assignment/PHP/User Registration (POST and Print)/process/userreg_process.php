<DOCTYPE html>
	<html lang="en">

	<head>
		<title>
			User Registration Form
		</title>
		<link rel="stylesheet" href="../styles/userreg.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	</head>

	<body>
		<div id="div_container">
			<!-- <img src="images/usericon.png" alt="User Login Icon"> -->
			<div class="div_form" style="color:white; text-align: left; line-height:1.5;">

<?php

echo "Email Address: ". $_POST["email"] . "<br />";
echo "Password: ". $_POST["password"] . "<br />";
echo "Website: ". $_POST["web"] . "<br />";
echo "First Name: ". $_POST["fname"] . "<br />";
echo "Last Name: ". $_POST["lname"] . "<br />";
echo "Birth Year: ". $_POST["birth_year"] . "<br />";
echo "Age (in Years): ". $_POST["age"] . "<br />";
echo "Gender: ". $_POST["gender"] . "<br />";
echo "Country: ". $_POST["country"] . "<br />";
echo "Phone Number: ". $_POST["phone"] . "<br />";
echo "Mobile Number: ". $_POST["mobile"] . "<br />";
echo "Marital Status: ". $_POST["marital_status"] . "<br />";
echo "Blood Group: ". $_POST["blood_group"] . "<br />";
echo "Remarks: ". $_POST["remarks"] . "<br />";

// File Handling
$pro_pic_name=$_FILES["profile_photo"]["name"];
$pro_pic_type=$_FILES["profile_photo"]["type"];
$pro_pic_tmp_name=$_FILES["profile_photo"]["tmp_name"];
$pro_pic_error=$_FILES["profile_photo"]["error"];
$pro_pic_size=$_FILES["profile_photo"]["size"];
$pro_pic_local_path="../images/uploads/". $pro_pic_name;
move_uploaded_file($pro_pic_tmp_name, $pro_pic_local_path);
// File Handling

echo "Appointment Date: ". $_POST["appointment_date"] . "<br />";
echo "Appointment Time: ". $_POST["appointment_time"] . "<br />";
echo "Appointment Month: ". $_POST["appointment_month"] . "<br />";
echo "Appointment Week: ". $_POST["appointment_week"] . "<br />";
echo "Agreement: ". $_POST["agreement"] . "<br />";

?>

<?php 
echo "<img class='profile_pic' alt='Profile Photo' src='". $pro_pic_local_path . "'>";
?>

<center><a href="../userreg.html"><button style="padding: 10px 20px; margin-top:25px; cursor: pointer; background-color:green; color:white; border: 1px solid forestgreen;">Back to Registration Form</button></a></center>

</div>

		<footer class="social_footer">
			<div class="social_footer_left">
			Copyright &copy 2021, THE COMPANY, All rights reserved
			</div>
			<div class="social_footer_right">
			  <ul>
				<li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
				<li><a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
			  </ul>
			</div>
		  </footer>

		  
	</body>

	</html>