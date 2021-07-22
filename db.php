<?php
// $conn = mysqli_connect(
//   'localhost', // 주소
//   'test',
//   '1234567890',
//   'SEMIN'); // 데이터베이스 이름

// $sql = "SELECT * FROM terran limit 10";
// $result = mysqli_query($conn, $sql);


// print_r($result);


// Create connection
$con=mysqli_connect("localhost","test","1234567890","my_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>