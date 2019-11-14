<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .container{

        width:500px;
      
    }
    .cs{
margin-top:30px;
    }
    </style>
</head>
<body>

<?php

$id =$_GET['id'];
require 'connect.php';

 $query = "SELECT * FROM jobsoffering WHERE id='$id'";
 $result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

// echo "<table class='table container' id='first' border='2'>";
// echo "<thead class='thead-light'><tr><th scope='col'>ID</th><th scope='col'>job name</th><th scope='col'>job image</th></tr></thead>";


echo"<ul class='list-group-item list-group-item-success container cs' >" ." ID:". " $row[id]" ."</ul>";

echo "<ul class='list-group-item list-group-item-success container'>"."COMPANY NAME:". "$row[company_name]"."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>" ."CATEGORY:". " $row[category]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>" ."ADDRESS:". " $row[address]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>"."STREET:"." $row[street]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>"."CITY:" . " $row[city]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>" ."JOB DESCRIPTION:". " $row[job_des]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>"."JOB REQUIRMENT:" . " $row[job_req]" ."</ul>";
echo"<ul class='list-group-item  list-group-item-success container'>" ."SALARY:". " $row[salary]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success  container'>" ."TELEPHONE NUMBER:". " $row[teleNo]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>" ."EMAIL:". " $row[email]" ."</ul>";




// echo  "<td>"."$row[image] "."<img src='default.jpg'>"."</td>";












?>


    
</body>
</html>