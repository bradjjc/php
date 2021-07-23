<?php

include "db.php";

print_r($_POST);

exit();

mysqli_query($conn, "
UPDATE
    terran
SET
    name = '".$_POST['name']."',
    age = ".$_POST['age'].",
    sex = ".$_POST['sex'].",
WHERE
    _id = ".$_POST['_id']."
");

echo "<script>
alert('수정되었습니다');
location.replace('select.php');
</script>";

?>
