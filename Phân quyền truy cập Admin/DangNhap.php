<?php
// Đăng nhập tài khoản khách
// Kết nối CSDL
$conn = mysqli_connect ('127.0.0.1', 'root', '', 'products') or die ('Không thể kết nối tới database');
mysqli_set_charset($conn, 'UTF8');

// Khởi tạo SESSION
session_start();
if (isset($_SESSION['username'])){
unset($_SESSION['username']);
}

// Dùng Isset kiểm tra
if (isset($_POST['login'])) {

$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

if (!$username || !$password) {
echo "Nhập đầy đủ thông tin <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}


//Kiểm tra tên đăng nhập có tồn tại không
$query = "SELECT * FROM users WHERE username='$username'";

$result = mysqli_query($conn, $query) or die( mysqli_error($conn));

$row = mysqli_fetch_array($result);

//So sánh 2 mật khẩu có trùng khớp hay không
if ($password != $row['password']) {
    echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
    }
//So sánh 2 user có trùng khớp hay không
if ($username != $row['username']) {
    echo "Tên đăng nhập không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
    }
    if( $_SESSION ['level'] == 1){
            $_SESSION ['level'] = $row['level'];
        }
        else{
            $_SESSION ['level'] = 0;
        }
$_SESSION['username'] = $username;
$_SESSION['id'] = $row['id'];
echo "user_id ".$row['id'];
echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href='TrangChu.php'>Về với Although</a>";
die();
$conn->close();
}

?>
