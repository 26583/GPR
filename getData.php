<?php
  $host = '127.0.0.1';
  $user = 'c3666Pelle';
  $password = 'saai123';
  $database = 'c3666pboi';
    $conn = mysqli_connect($host, $user, $password, $database) or die('Failed to connect: ' . mysqli_error());
    
    $query="SELECT * FROM td_score";
    $result=mysqli_query($conn, $query);
    if ($result) {
        while($row = $result->fetch_assoc()){
           echo $row["name"]." ".$row["score"].";";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
 ?>