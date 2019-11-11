<?php
require 'connect.php';
// $id = $_GET['id'];

// if (!isset($_GET['id'])){
//     header("location:main.php");
// }
if (!isset($_GET['id']) or $_GET['id'] == ""){
    header("location:students.php");
}
$id = $_GET['id'];



$query1 = "SELECT * FROM jobsoffering WHERE id=$id";

$result1 = mysqli_query($conn, $query1);

// if (mysqli_num_rows($result1)==0){
//     header("location:main.php");
// }

$jobs = mysqli_fetch_assoc($result1);


echo "<ul>";
echo "<li>" . $jobs['jobname'] . "</li>";
echo "<li>" . $jobs['respons'] . "</li>";
echo "<li>" . $jobs['image'] ."<img src= 'default.jpg'>". "</li>";

echo "</ul>";



?>

