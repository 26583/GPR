<?php
  $score=$_REQUEST['score'];
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'unitytest';
  //TODO: Player name?
  //TODO: sanitize input
  //if no score is defined, code won't work
  if($score != ""){
    //connect with database (other user/password combinations may be needed)
    $conn = mysqli_connect($host, $user, $password, $database) or die('Failed to connect: ' . mysqli_error());
    
    $query="INSERT INTO td_score(id, score, name) VALUES(DEFAULT,'$score', 'pelle');";
    $result=mysqli_query($conn, $query);
    if ($result) {
      echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
  } else{
    echo "Score was empty";
  }
 ?>