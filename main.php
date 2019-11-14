
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php


require 'connect.php';

$query = "SELECT * FROM Jobsoffering  LIMIT 12";


$result = mysqli_query($conn, $query);



if(mysqli_num_rows($result )> 0){
echo "<table class='table container' id='first' border='2'>";
echo "<thead class='thead-light'><tr><th scope='col'>ID</th><th scope='col'>job name</th><th scope='col'>Details</th><th scope='col'>job image</th></tr></thead>";
 




      
         while($row = mysqli_fetch_assoc($result))
         { 
                if ($row['respons']==1)
        
              {
                 echo"<tbody>";
                echo "<tr  scope='row' id='first'>";
                echo "<td id='first'>" . $row['id'] . "</td>";

        echo "<td id='first'>" . $row['job_tittle'] . "</td>";
        $id = $row['id'];
    echo "<td id='first'><a  href='detail.php?id=" . $row['id'] . "'>Details</a></td>";

        echo "<td id='first'>" . $row['image'] ."<img src='default.jpg' style : width=70px;heighet =80px>"."</td>"; 
        echo "</tr>";
        echo"</tbody>";
              }
        }
    

  echo "</table>";
}

$query1 = "SELECT * FROM Jobsoffering  order by id desc ";




$result1 = mysqli_query($conn, $query1);
if(mysqli_num_rows($result1 )> 0)
{
  echo "<table class='table container' id='first' border='2'>";
  echo "<thead class='thead-light'><tr><th scope='col'>ID</th><th scope='col'>job name</th><th scope='col'>Details</th><th scope='col'>job image</th></tr></thead>";

while($row1 = mysqli_fetch_assoc($result1))
        { 

          if ($row1['respons']==0) {

            echo "<td id='first'>" . $row1['id'] . "</td>";

            
   echo "<td id='second'>" . $row1['job_tittle'] . "</td>";
   $id = $row['id'];

   echo "<td ><a href='detail.php?id=" . $row1['id'] . "'>Details</a></td>";
   echo "<td id='second'>" . $row1['image'] ."<img src='default.jpg' style : width=70px;heighet =80px>"."</td>"; 
    echo "</tr>";

          }
        
        }
      }


?>
    
</body>
</html>
