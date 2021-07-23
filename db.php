<?php

  error_reporting(E_ALL);
  ini_set('display_errors', '1');

$conn = mysqli_connect(
  'db.goselpic.com', 
  'semin',
  'semin1234567890',
  'semin'); 

$sql = "SELECT * FROM terran limit 10";
$result = mysqli_query($conn, $sql);

// echo "<table border='1'>";

// while($row = mysqli_fetch_array($result)) {
//   echo "<tr>";
//   echo '<td>'.$row['name'].'</td>';
//   echo '<td>'.$row['age'].'</td>';
//   echo '<td>'.$row['sex'].'</td>';
//   echo "</tr>";
// }


// echo "</table>";

// $sql = "SELECT * FROM terran limit 1";
// $result = mysqli_query($conn, $sql);

// echo "<table border='1'>";

// while($row = mysqli_fetch_array($result)) {

  
//   echo "<tr>";
//   echo '<td>'.$row['name'].'</td>';
//   echo '<td>'.$row['age'].'</td>';
//   echo '<td>'.$row['sex'].'</td>';
//   echo "</tr>";
// }

?>