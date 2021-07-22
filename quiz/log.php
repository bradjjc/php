
 <?php 
    if ($_POST['id'] == "TEXT" && $_POST['pwd'] == 1234) 
    {
        session_start();

        $_SESSION["id"] = $_POST['id'];

        echo "로그인됨";
    }
    else
    {
        echo "로그인실패";
    }
            
?>  
<br/>
<a href = "result.php">결과확인</a>
