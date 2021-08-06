<?php
include("process/mysql_conn.php");

session_start();
if(!isset($_SESSION['$is_logged_in']) && $_SESSION['$is_logged_in']="True"){
    header("Location:index.php");
}

?>

<html>

<head>
    <title>
        User Registration
    </title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div id="div_container_users">
        <div class="div_container_users_sub">
            <h1>LIST OF ALL REGISTERED USERS</h1><br>
            <?php
            show_record_all("tbl_user_reg_det"); 
            
            if(isset($_GET['delete_reg_id'])){
                $reg_id = $_GET['delete_reg_id'];
                delete_selected_rec("tbl_user_reg_det","reg_id",$reg_id);
                $conn->close();

                $page = $_SERVER['PHP_SELF'];
                $sec = "0";
                header("Refresh: $sec; url=$page");
            }

                
            


            ?>   
        </div>
    </div>
</body>

<footer>
    <div class="div_footer">
        <a href="index.php"><button>HOME</button></a>
        <a href="user_reg_add.php"><button>ADD NEW RECORD</button></a>
        <a href="user_reg_list.php"><button>VIEW ALL RECORDS</button></a>
    </div>
</footer>

</html>