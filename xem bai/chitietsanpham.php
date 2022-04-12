<?php
require "public/header.php"
?>
<?php
    require_once 'config/db.php';
?>
                            
                <?php
                    $ProductID=  $_GET['ProductID'];
                    $sql = "SELECT * FROM news WHERE ProductID='$ProductID'";
                    $result = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_array($result)){               
                    ?>

                    <section class="content prd-detail"> 
                    <h1 class="food-name"><?php echo $row ['Name']; ?></h1>

                    <div class="product">
                    <img src="./img/<?php echo $row ['Img']?>">
                    </div>
                    
                    <div class="product-recipe">
                    <h2>Nguyên liệu:</h2>
                    <div class="line"></div>
                    <ul class="recipe"><?php echo $row ['Ingredient']; ?>

                    <div class="food-content">
                    <h3>Công thức :</h3>
                    <ul class="	Recipe"><?php echo $row ['Recipe']; ?>
                    </ul>                           
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>

        </div>
    </div>
</div>
</body>
            <!-- <div class="product-end">
                <h4 class="product-author">Đăng bởi: hihi</h4>
                <div class="rating">
                    0 sao -->
                    <!-- <ul class="rating">
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></i></li>
                    </ul> --> -->
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

