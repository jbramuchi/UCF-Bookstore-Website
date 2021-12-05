



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Add Record Form</title>
</head>
<body>
    <form action="insert.php" method="post">
        <p>
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" id="isbn" />
        </p>
        <p>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" />
        </p>
        <p>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" />
        </p>
        <p>
            <label for="publisher">Publisher:</label>
            <input type="text" name="publisher" id="publisher" />
        </p>
        <p>
            <label for="edition">Edition:</label>
            <input type="text" name="edition" id="edition" />
        </p>
        <p>
            <label for="professor">Professor:</label>
            <input type="text" name="professor" id="professor" />
        </p>
        <p>
            <label for="semester">Semester:</label>
            <input type="text" name="semester" id="semester" />
        </p>
        <p>
            <label for="classname">Classname:</label>
            <input type="text" name="classname" id="classname" />
        </p>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>