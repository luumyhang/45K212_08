<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "users_data") or die($conn);
if (isset($_POST['registerBtn'])) {
    if(empty($_POST['username']) or empty($_POST['password'])){
        echo "<p style='color:red'>Vui lòng không để trống</p><a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    //Kiểm tra username có bị trùng hay không 
    $sql = "SELECT * FROM users WHERE username='$username'";

    //Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
    
    //Nếu kết quả trả về lớn hơn 1 thì username đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //Dừng chương trình 
        die();
    }
    else{
        $sql= "INSERT INTO users (username, password) VALUES ('$username','$password')";
        if (mysqli_query($conn, $sql)) {
          header('location:TrangChu.php');
        } else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
        }
    }
}
?>
