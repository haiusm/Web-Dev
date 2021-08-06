<?php
session_start();

unset($_SESSION["$is_logged_in"]);
unset($_SESSION["user_email"]);

session_destroy();

header("Location:signin.php");
?>