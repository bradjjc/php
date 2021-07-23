<?php
include "db.php";
mysqli_query($conn,"
UPDATE 
    terran 
SET
    name = '".$_POST['name']."',
    age = ".$_POST['age'].",
    sex = ".$_POST['sex']."
where
    _id =".$_POST['id']."
");
?>
<script>
    alert('수정되었습니다.');
    location.href='select.php';
</script>