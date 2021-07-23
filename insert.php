<?php




include "db.php";
mysqli_query($conn,"
INSERT INTO terran (
    name,
    age,
    sex
) VALUES (
    '".$_POST['name']."',
    ".$_POST['age'].",
    ".$_POST['sex']."
)");




// include "db.php";

// mysqli_query($conn, "
// INSERT INTO terran (
//     name,
//     age,
//     sex
// ) VALUES (
//     '".$_POST['name']."'.
//     '".$_POST['age']."',
//     '".$_POST['sex']."'
// )");

// echo "<script>
// alert('등록되었습니다');
// location.replace('select.php');
// </script>";
// // echo "<script>location.href='select.php'</script>"

?>

<script>
    alert('등록되었습니다');
    location.href='select.php';
</script>