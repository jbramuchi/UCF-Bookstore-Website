<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');


require_once "config.php";



// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$isbn = mysqli_real_escape_string($link, $_REQUEST['isbn']);
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$author = mysqli_real_escape_string($link, $_REQUEST['author']);
$publisher = mysqli_real_escape_string($link, $_REQUEST['publisher']);
$edition = mysqli_real_escape_string($link, $_REQUEST['edition']);
$professor = mysqli_real_escape_string($link, $_REQUEST['professor']);
$semester = mysqli_real_escape_string($link, $_REQUEST['semester']);
$classname = mysqli_real_escape_string($link, $_REQUEST['classname']);


// Attempt insert query execution
$sql = "INSERT INTO bookorder (isbn, title, author, publisher, edition, professor, semester, classname) VALUES ('$isbn', '$title', '$author', '$publisher', '$edition', '$professor', '$semester', '$classname')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
header("location: index.php");

?>

