<?php
session_start();

if(isset($_SESSION['user_email'])){
    $user_email=$_SESSION['user_email'];
} else {
    header("Location: signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="div_dashboard_main">
    <h1 style="font-size: 5rem; margin-bottom:3rem;">WELCOME<span style="color: green;">&nbsp<?php echo $user_email ?></span></h1></span>
<br>
    <p style="font-size:2rem;">Enjoy the plateform and keep supporting us</p>
    <br>
    <span style="color: red; margin-top: 5rem; display: block; font-size:3rem"><a href="logout.php">LOGOUT</a></span>
    </div>
</body>
</html>