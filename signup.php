<?php
 require 'connect.php';

if (isset($_POST['name'])){


$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$telNo = $_POST['telNo'];
$type=$_POST['type'];



$query = "INSERT INTO user (name, password, email,address,telNo,type) values ('$name', '$password', '$email','$address','$telNo','$type')";

$result = mysqli_query($conn, $query);



if ($result){
    echo "user  sign up successfully";
    header("location:main.php");

}
else{
	echo "Error " . mysqli_error($conn);
}

}
else{
	header("location: reg.php");
	echo "No data";
}

?>