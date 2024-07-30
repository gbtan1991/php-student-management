<?php 
include 'config/config.php';

$name = $_POST['name'];
$age = $_POST['age'];
$grade = $_POST['grade'];

$sql = "INSERT INTO students (name, age, grade) VALUES ('$name', '$age', '$grade')";

if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully";
}else{
    echo "Error: " . $sql . "<br>" .  mysqli_error($conn);

}
mysqli_close($conn);
header("Location: index.php");



?>