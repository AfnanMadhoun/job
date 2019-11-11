<?php
require 'connect.php';

if (!isset($_GET['id']) or $_GET['id'] == ""){
    header("location:main.php");
}
$id = $_GET['id'];


$query2 = "SELECT * FROM jobsoffering WHERE id='$id'";

$result2 = mysqli_query($conn, $query2);

// if (mysqli_num_rows($result1)==0){
//     header("location:main.php");
// }

$jobs = mysqli_fetch_assoc($result2);

echo "test";
echo "<ul>";
echo "<li>" . $jobs['jobname'] ."test". "</li>";
echo "<li>" . $jobs['respons'] . "</li>";
echo "<li>" . $jobs['image'] ."<img src= 'default.jpg'>". "</li>";

echo "</ul>";



?>

