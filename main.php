
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php


require 'connect.php';

$query = "SELECT * FROM Jobsoffering  LIMIT 8";


$result = mysqli_query($conn, $query);



if(mysqli_num_rows($result )> 0){
echo "<table id='first' border='2'>";
echo "<tr><th>ID</th><th>job name</th><th>Details</th><th>job image</th></tr>";
 
   

// echo "<table id='second' border='2'>";
// echo "<tr><th>job name</th><th>Details</th><th>job image</th></tr>";
    // while($row = mysqli_fetch_assoc($result))
    // { 
    
        
      
         while($row = mysqli_fetch_assoc($result))
         { 
                if ($row['respons']==1)
        
              {
                echo "<tr id='first'>";
                echo "<td id='first'>" . $row['id'] . "</td>";

        echo "<td id='first'>" . $row['jobname'] . "</td>";
        $id = $row['id'];
    // echo "<td><a href='details.php?id=$id'> delete </a></td>";
    echo "<td id='first'><a  href='detail.php?id=" . $row['details'] . "'>Details</a></td>";

        // echo "<td id='first'><a href='details.php?id=" . $row['details'] . "'>Details</a></td>";
        echo "<td id='first'>" . $row['image'] ."<img src='default.jpg' style : width=70px;heighet =80px>"."</td>"; 
        echo "</tr>";
              }
    //    echo "<tr>"; 
        }
     





//  echo "<table border='2'>";
// echo "<tr><th>job name</th><th>Details</th><th>job image</th></tr>";
//             if ($row['respons']==0)
//        {

     
//            echo"</br>";
//         echo "<table border='2'>";
//         echo "<tr><th>job name</th><th> job Name</th><th>Details</th></tr>";
        
//             echo "<tr>";
//             echo "<td>" . $row['jobname'] . "</td>";
            
//             echo "<td><a href='detail.php?id=" . $row['id'] . "'>Details</a></td>";
//             echo "<td>" . $row['image'] ."<img src='default.jpg' style : width=70px;heighet =80px>". "</td>";
    
    
//             echo "</tr>";
//         }
  
//     // echo "</table>";
//     echo"</br>";
    // }



    // }

  echo "</table>";
}

$query1 = "SELECT * FROM Jobsoffering  ";




$result1 = mysqli_query($conn, $query1);



if(mysqli_num_rows($result1 )> 0){
echo "<table id='first' border='2'>";
echo "<tr><th>ID</th><th>job name</th><th>Details</th><th>job image</th></tr>";
while($row1 = mysqli_fetch_assoc($result1))
        { 

          if ($row1['respons']==0) {

            echo "<td id='first'>" . $row1['id'] . "</td>";

            
   echo "<td id='second'>" . $row1['jobname'] . "</td>";
   $id = $row['id'];

   echo "<td ><a href='detail.php?id=" . $row['details'] . "'>Details</a></td>";
   echo "<td id='second'>" . $row1['image'] ."<img src='default.jpg' style : width=70px;heighet =80px>"."</td>"; 
    echo "</tr>";

          }
        
        }
      }

?>
    
</body>
</html>
