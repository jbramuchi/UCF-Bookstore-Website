<?php
 
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: professor_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Welcome</title>
    <link rel="stylesheet" href="mastersheet.css" />
</head>
<body>
    <div class="headbanner">
        <img src="UCFLOGO.jfif" width="200" height="200" float="left" />
        <div class="headbanner2">Book Orders Home Page</div>
    </div>
    <div class="indexcontent">
        <div class="textbanner">
            <h2>
                <b>Welcome, Professor.</b>
            </h2>
        </div>
        <a href="" class="button">Submit new book request form</a><br />
        <a href="book-table.php" class="button">View & Edit a book request form</a><br />
        <a href="logout.php" class="button">Sign Out of Your Account</a><br />
    </div>
</body>
</html>