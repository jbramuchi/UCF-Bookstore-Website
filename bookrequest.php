<?php
session_start();
require_once "config.php";
$sql = "SELECT * FROM faculty ";
$result = mysqli_query($link, $sql);
echo "<div class=\"headbanner\"><img src=\"UCFLOGO.jfif\" width=\"200\" height=\"200\" float=\"left\"><div class=\"headbanner2\">List of Book Requests</div></div>";
echo "<table id=\"mytable\">
    "; // start a table tag in the HTML
if($result){
    if(mysqli_num_rows($result) > 0){
        echo "<table id=\"mytable\">";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Book</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['pname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['book'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mastersheet.css" />
</head>
<body>
    <div class="bookrequestcontent">
        <form action="sentmail.php" method="post">
            <input type="submit" value="Sent mail" />
        </form>
    </div>
</body>

</html>