<!-- header -->
<?php
require "public/header.php"
?>
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
        <form action="chitietsanpham.php"></form>
        <div class="logo">
            <a href="./TrangChu.php">
                <img src="img/logo.png">
            </a>
        </div>

        <!-- <div class="menu">
            <li>
                <a href="./TrangChu.php">TRANG CHỦ</a>
            </li>
            <li>
                <a href="./MienBac.html">MIỀN BẮC</a>
            </li>
            <li>
                <a href="./MienTrung.html">MIỀN TRUNG</a>
            </li>
            <li>
                <a href="./MienNam.html">MIỀN NAM</a>
            </li>
            <li>
                <a href="./BaoMat.html">BẢO MẬT</a>
            </li>
            <li>
                <input type="text" placeholder="Tìm kiếm...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </li>

        </div> -->
        
        <!-- <div  class="log">
            <li class="others">
                <a href="./DangKy.html">ĐĂNG KÝ</a>
            </li>
            <li class="others">
                <a href="./DangNhap.html">ĐĂNG NHẬP</a>
            </li> -->
            <!-- <li class="others">
                <a href="" >
                    <i class="fa-regular fa-user"></i>                      
                    TÀI KHOẢN
                </a>
                <ul class="user-out">
                    <li class="user-out-item">
                        <a href="./QLBaiViet.html">Quản lý bài viết</a>
                    </li>
                    <li class="user-out-item">
                        <a href="./QLTaiKhoan.html">Quản lý tài khoản</a>
                    </li>
                    <li class="user-out-item">
                        <a name="dangxuat">Đăng xuất</a>
                    </li>
                </ul> 
            </li> -->
        </div>
    </header>
<!-- Body -->
    <section class="content prd-detail">
        <h1>Canh riêu cua</h1>
        <div class="product">
            <img src="./img/B1.png" alt="">
            <div>
                <h2>Nguyên liệu:</h2>
                <div class="line"></div>
                <ul class="ingredient recipe">
                    <li>200gram Cua đồng</li>
                    <li>2 quả Cà chua</li>
                    <li>10 củ Hành khô</li>
                    <li>Mẻ hoặc giấm bỗng</li>
                    <li>Hành tươi</li>
                    <li>Gia vị (muối, bột ngọt, nước mắm, mắm tôm)</li>
                </oull>
            </div>
            <div class="product-recipe">
                <h2>Cách bước thực hiện:</h2>
                <div class="line"></div>
                <ul class="recipe">
                    <li>Bước 1: <p>Cua rửa qua nước, sau đó xé cua. Tách cua riêng màu riêng. Mai cua bỏ đi. Cà chua bổ múi cau. Hành lột vỏ thái mỏng.</p></li>
                    <li>Bước 2: <p>Sau khi nhặt cua đem rửa lại lần nữa rồi cho vào máy xay lọc lấy nước sao cho đủ ăn.</p></li>
                    <li>Bước 3: <p>Cà chua thái múi cau. Đậu rán vàng.</p></li>
                    <li>Bước 4: <p>Bắc bếp đun cua đã lọc. Cho chút muối khuấy đều đun lửa nhỏ cho đến khi gạch cua nổi lên ép lấy gạch. Nước giẫm bỗng hoạc mẻ đun xôi lọc qua đổ vào nồi cua</p></li>
                    <li>Bước 5: <p>Phi thơm hành khô cho cà chua vào đảo cho lên màu rồi đổ gạch cua vào cho thêm nước mắm rồi đổ vào nồi cua. Tiếp đến cho đậu phụ đã rán vào đun thêm 10p cho hành lá mũi tàu tắt bếp</p></li>
                    <li>Bước 6: <p>Múc canh cua ra bát.<br>(Có thế ăn kèm bún, rau sống, chả nướng...)</p></li>
                </ul>
            </div>
            <div class="product-end">
                <h4 class="product-author">Đăng bởi: hihi</h4>
                <div class="rating">
                    <!-- 0 sao -->
                    <ul class="rating">
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></i></li>
                    </ul>
                    <!-- 1 sao -->
                    <!-- <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></i></li>
                    </ul> -->
                    <!-- 2 sao -->
                    <!-- <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></i></li>
                    </ul> -->
                    <!-- 3 sao -->
                    <!-- <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></i></li>
                    </ul> -->
                    <!-- 4 sao -->
                    <!-- <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></i></li>
                    </ul> -->
                    <!-- 5 sao -->
                    <!-- <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></i></li>
                    </ul> -->
                </div>
            </div>
        </div>
        </div class="product-cmt">
                <h3>Bình luận:</h3>
                <section class="comment">
                    <textarea name="comment" class="text" placeholder="Bình luận ở đây..."></textarea>
                </section>
                <section class="comment">
                    <input type="submit" class="btn-cmt">
                </section>
            </div>
        </div>
    </section>
 <!-- footer -->
    <table class="footer-text">
        <tr>
            <td class="introduce">
                <img src="./img/logo.png">
                <p>Nhóm 8 rất cám ơn bạn đã ghé thăm và dành thời gian cho bọn mình. Để cập nhập nhiều công thức tuyệt đỉnh, tin tức mới nhất về ẩm thực, bạn hãy ghé thăm website của bọn mình <a href="TrangChu.php">tại đây</a> nhé.</p>
            </td>
            <td class="contact">
                <h1>QUẢN TRỊ DỰ ÁN - NHÓM 8</h1>
                <p>
                    Địa chỉ: 71 Ngũ Hành Sơn - Q.Ngũ Hành Sơn, TP.Đà Nẵng, Việt Nam<br>
                    Email: qtda.nhom8@gmail.com
                </p>
            </td>
        </tr>
    </table>
    <div class="footer-bottom">
        <p>©ALTHOUGH NHOM 8</p>
    </div>
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
</html>