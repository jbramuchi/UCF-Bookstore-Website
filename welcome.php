<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="mastersheet.css">
</head>
<body>
    <div class="headbanner">
        <img src="UCFLOGO.jfif" width="200" height="200" float="left" />
        <div class="headbanner2">Book Orders Home Page</div>
    </div>
    <div class="indexcontent">
        <div class="textbanner"><h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1></div>
        <p>
            <a href="reset-password.php" class="button">Reset Your Password</a><br />
            <a href="logout.php" class="button">Sign Out of Your Account</a><br />
            <a href="bookrequest.php" class="button">View Book Request</a><br />
        </p>
    </div>
</body>
</html>