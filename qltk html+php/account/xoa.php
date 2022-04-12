<?php
$id = $_GET['id'];
$sql = "DELETE FROM users where id = $id";
$query = mysqli_query($connect, $sql);
header('location: QLTaiKhoan.php?page_layout=danhsach.php');
?>