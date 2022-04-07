<?php
    $connect = mysqli_connect('localhost','root','','products');
    if($connect){
        mysqli_query($connect, "SET NAMES 'UTF8'");
    }
    else{
        echo "Kết nối thất bại";
    }
?>