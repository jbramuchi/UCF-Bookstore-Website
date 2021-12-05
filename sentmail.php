<?php
session_start();
require_once "config.php";
$sql = "SELECT * FROM faculty ";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($result)) {
        $to_email = $row['email'];
        $subject = "Book order";
        $name = $row['pname'];
        $body = "Hello,\n $name please place your book order using this site \n http://localhost:61454/professor_login";
        $headers = "From: bookorder@placebookorder.com";

        if ( mail($to_email, $subject, $body, $headers)) {
            echo("Email successfully sent to $to_email...");
        } else {
            echo("Email sending failed...");
        }
        header("location: Email-Success.html");
    }
?>