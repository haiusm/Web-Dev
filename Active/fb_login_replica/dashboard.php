<?php
session_start();
if(!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']==TRUE){
header("Location: signin.php");
} else {
$is_logged_in=$_SESSION['is_logged_in'];
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Sign-up Form</title>
</head>
<body>
<div id="div_dashboard_main">
<ul>
        <li>Home</li>
        <li>About Us</li>
        <li>Friends</li>
        <li></li>
        <li>Welcome: <?php echo $user_name; ?>
        <div id="div_dashboard_main_sub_menu"><ul><li><a href="logout.php">Logout</li></ul></div>
    </li>
    </ul>
</div>
</body>
</html>