<?php

include "db.php";
// echo $_GET['id'];

$sql = "
  SELECT 
      *
  FROM 
    terran
where
    _id =".$_GET['id'];

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

print_r($row);

?>



<form action='update.php' method='post'>
<input type="hidden" name='id' value="<?=$row['_id']?>"><br/>


이름 : <input type="text" name='name' value="<?=$row['name']?>"><br/>


나이 :
<select name='age'>
    <?php for($i=1;$i<=100;$i++){?>
    <option value='<?=$i?>' <?php if($row['age'] == $i){ echo "selected";}?>><?=$i?>세</option>
    <?php }?>
    </select><br/>
성별 :
<select name='sex'>
    <option value='1'<?php if($row['sex'] == '1'){ echo "selected";}?>>남자</option>
    <option value='0'<?php if($row['sex'] == '0'){ echo "selected";}?>>여자</option>
</select><br/>



<input type='submit' value="수정하기">

</form>


