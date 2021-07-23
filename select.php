<?php


include "db.php";

echo "</table>";

$sql = "
  SELECT 
      terran.* ,
      (select COUNT(*) from matching where parent_id = terran._id) as cnt
  FROM 
    terran as terran 
    order by terran._id DESC
  limit 20";
$result = mysqli_query($conn, $sql);


$sql2 = "SELECT COUNT(*) as cnt from terran ";

$result2 = mysqli_query($conn, $sql2);

$row2 = mysqli_fetch_array($result2);

$allcount = $row2['cnt'];


echo "전체 사람수::".$allcount;
echo "<table border='1'>";
echo "<tr>";
echo '<td>이름</td>';
echo '<td>나이</td>';
echo '<td>성별</td>';
echo '<td>생존</td>';
echo '<td>자녀수</td>';
echo '<td>삭제</td>';
echo "</tr>";

while($row = mysqli_fetch_array($result)) {

  $live = '';
  if($row['age'] > 80)
  {
    $live = "die";
  }
  else
  {
    $live = "live";
  }

  
  echo "<tr>";
  echo '<td><a href=\'update_form.php?id='.$row['_id'].'\'>'.$row['name'].'</a></td>';
  echo '<td>'.$row['age'].'</td>';
  echo '<td>'.$row['sex'].'</td>';
  echo '<td>'.$live.'</td>';
  echo '<td>'.$row['cnt'].'</td>';
  echo '<td><a href=\'delete.php?id='.$row['_id'].'\'>삭제</td>';
  echo "</tr>";
}

echo "</table>";

?>

<a href='form.php'>등록하기</a>