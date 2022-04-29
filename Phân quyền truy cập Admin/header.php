<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fontawesome-free-6.1.0-web/css/all.min.css">   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,300;0,400;0,500;1,300&display=swap&subset=vietnamese"><title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="./TrangChu.php">
                <img src="img/logo.png">
            </a>
        </div>

        <div class="menu">
            <li class="menu-item">
                <a href="./TrangChu.php">TRANG CHỦ</a>
            </li>
            <li class="menu-item">
                <a href="./MienBac.php">MIỀN BẮC</a>
            </li>
            <li class="menu-item">
                <a href="./MienTrung.php">MIỀN TRUNG</a>
            </li>
            <li class="menu-item">
                <a href="./MienNam.php">MIỀN NAM</a>
            </li>
            <li class="menu-item">
                <a href="./BaoMat.php">BẢO MẬT</a>
            </li>
            <li class="menu-item" >
                <form action = "./search.php" method = "GET">
                    <input type = "text" name = "search" placeholder="Nhập từ khóa cần tìm" value =
                    "<?php if(isset($_GET["search"])) {echo $_GET["search"];} ?>">
                    <i  type = "submit" class="fa-solid fa-magnifying-glass"></i>
                </form>
            </li>

        </div>
        <?php
            session_start();
            if(isset($_SESSION['username'])) {
        ?>
            <?php
                if($_SESSION['level'] == 1) {
            ?>
                    <li class="others">
                        <a href="" >
                            <i class="fa-regular fa-user"></i>                      
                            Quản trị viên
                        </a>
                        <ul class="user-out">
                            <li class="user-out-item">
                                <a href="./QLBaiViet.php">Quản lý bài viết</a>
                            </li>
                            <li class="user-out-item">
                                <a href="./QLTaiKhoan.php">Quản lý tài khoản</a>
                            </li>
                            <li class="user-out-item">
                                <a href="DangXuat.php" name="dangxuat">Đăng xuất</a>
                            </li>
                        </ul> 
                    </li>
            <?php
                } else {
            ?>
                <div class="log">
                    <li class="others">
                        <a href="" >
                            <i class="fa-regular fa-user"></i>                      
                            <?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?>
                        </a>
                        <ul class="user-out">
                            <li class="user-out-item">
                                <a href="./QLBaiViet.php">Quản lý bài viết</a>
                            </li>
                            <!-- <li class="user-out-item">
                                <a href="./QLTaiKhoan.php">Quản lý tài khoản</a>
                            </li> -->
                            <li class="user-out-item">
                                <a href="DangXuat.php" name="dangxuat">Đăng xuất</a>
                            </li>
                        </ul> 
                    </li>
                </div>
        <?php
                }
            } else {
        ?>
                <div class="log">
                    <li class="others">
                        <a href="./DangKy.html">ĐĂNG KÝ</a>
                    </li>
                    <li class="others">
                        <a href="./DangNhap.html">ĐĂNG NHẬP</a>
                    </li>
                </div>
        <?php
            }
        ?>
    </header>
</body>

<script>
// main
    const header = document.querySelector("header");
    window.addEventListener("scroll", function(){
        x = window.pageYOffset
        if(x>0){
            header.classList.add("sticky")
        }
        else{
            header.classList.remove("sticky")
        }
    })
</script>