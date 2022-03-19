<?php
// Kết nối Database
require_once 'posts_connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `posts` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<?php require_once 'posts_update.php';?>