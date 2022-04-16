<?php
    $connect = mysqli_connect('127.0.0.1 ','root','','users_data');
    if($connect){
        mysqli_query($connect, "SET NAMES 'UTF8'");
    }
    else{
        echo "Kết nối thất bại";
    }
?>