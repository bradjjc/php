<?php
    session_start();
    
        if ($_SESSION["id"] == "TEXT") 
        {
            echo $_SESSION["id"]."님 안녕하세요";
        }
        else
        {
            echo "로그인실패";
        }
            

?>