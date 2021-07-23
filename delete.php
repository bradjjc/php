<?php

include "db.php";

mysqli_query($conn, "
DELETE from terran where _id = ".$_GET["id"]); 

?>

<script>
    alert('삭제 되었습니다');
    location.href='select.php';
</script>
