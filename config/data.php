<?php
    $connect=mysqli_connect("localhost","root","","sang5");
    if($connect){
        mysqli_query($connect,"SET NAMES 'UTF8'");
    }else{
        echo"Kết Nối Thất Bại";
    }
?>