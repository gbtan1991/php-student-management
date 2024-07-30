<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Student</h2>
    <form method="post" action="insert.php">
        Name: <input type="text" name="name" required>
        <br>
        Age: <input type="number" name="age" required>
        <br>
        Grade: <input type="number" name="grade" required>
        <br>
        <input type="submit" value="Add">
    </form>

    <h2>Students List</h2>
    <?php 
    
    include 'config/config.php';

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Age: " . $row["age"]. " - Grade: " . $row["grade"]. "<br>";
        }
    
    }
    else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>

</body>
</html>