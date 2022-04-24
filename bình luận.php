<?php
require "public/header.php";
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
         
                </div>
            </div>
        </div>
        <?php 
                
            
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btncomment']) && ($_POST['btncomment'])){
                    if(isset($_SESSION['username'])){
                        if(!empty($_POST['comment'])){
                            $comment = $_POST['comment'];
                            $SQL = "INSERT INTO comments (name, comment,newsID)
                            VALUES ('".$_SESSION['username']."', '".$comment."','".$_GET['ProductID']."');";
                            $result = mysqli_query($connect, $SQL) or die( mysqli_error($connect));
                        }
                        else{
                            echo "<span class='danger moidangnhap'>Vui lòng không để trống!</span>";
                        }
                    }
                    else {
                        echo "<span class='danger moidangnhap'>Mời Bạn Đăng Nhập Trước Khi Bình Luận <a href='DangNhap.html'> Nhấp Tại Đây</a></span>";
                    }
                }
                // xoá bl
                if(isset($_GET['xoa']) && ($_GET['id'] > 0)){
                    $SQL = "DELETE FROM comments WHERE id=".$_GET['id']."";
                    $result = mysqli_query($connect, $SQL) or die( mysqli_error($connect));
                }
                
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnsua']) && ($_POST['btnsua'])){
                    $comment = $_POST['commentsua'];
                    $id = $_POST['commentId'];
                    $SQL = "UPDATE comments SET comment='".$comment."' WHERE id=".$id.";";
                    $result = mysqli_query($connect, $SQL) or die( mysqli_error($connect));
                }
                ?>
        </div class="product-cmt">
        <h3>Bình luận:</h3>
        <div class="box-binhluan">
            
            <?php 
        if(isset($_GET['ProductID']) && ($_GET['ProductID'])){
            $SQL = "SELECT * FROM comments WHERE NewsID=".$_GET['ProductID'];
            $result = mysqli_query($connect, $SQL) or die( mysqli_error($connect));
            $row = mysqli_fetch_all($result);
            
            foreach ($row as $key=>$item) {
                    if(isset($_SESSION['username']) && ($_SESSION['username'] == $item[1])){
                    
                    $linkEdit = '<a href="?sua&id='.$item[0].'&ProductID='.$_GET['ProductID'].'">    <i class="fa fa-pencil success" aria-hidden="true"></i></a>';
                    $linkDel = '<a href="?xoa&id='.$item[0].'&ProductID='.$_GET['ProductID'].'">   <i class="fa fa-trash danger" aria-hidden="true"></i></a> ';
                    
                }else{
                    $linkEdit = '';
                    $linkDel = '';
                }
                
                foreach ($row as $key=>$item) {
                    if(isset($_SESSION['username']) && ($_SESSION['username'] == $item[1] || ($_SESSION['level'] == 1))){
                        
                        $linkDel = '<a href="?xoa&id='.$item[0].'&ProductID='.$_GET['ProductID'].'">   <i class="fa fa-trash danger" aria-hidden="true"></i></a> ';
                        
                    }else{
                        $linkEdit = '';
                        $linkDel = '';
                    }
                }
                if(isset($_GET['sua']) && ($_GET['id']  == $item[0])){
                    echo '  
                    <div class="strong">'.$item[2].' </div><span class="by">'.$item[1].'</span> '.$linkDel.''.$linkEdit.' <br>';
                    ?>
                        <form action="?ProductID=<?=$_GET['ProductID']?>" method="post">
                            <div class="new-comment w-30">
                                <input type="text" name="commentsua" placeholder="Nhập bình luận..." value=" <?php echo $item[2];?>" />
                            </div>
                            <input type="submit" name="btnsua" class="btn btn-primary" value="Sửa">
                            <input type="hidden" name="commentId" value="<?php echo $item[0];?>"> 
                        </form>
                    <?php 
                }else{
                    echo '
                    <div class="strong">'.$item[1].' </div><span class="by">'.$item[2].'</span> '.$linkDel.''.$linkEdit.' <br>';
                }
            }
        }
        ?>
            
        </div>
        <form action="?ProductID=<?=$_GET['ProductID']?>"  method="post">
            <section class="comment">
                <!-- <textarea name="comment" class="text" placeholder="Bình luận ở đây..."></textarea> -->
                <div class="new-comment">
                    <input type="text" name="comment" placeholder="Nhập bình luận..." />
                </div>
            </section>
            <section class="comment">
                <input type="submit" name="btncomment" class="btn btn-primary" value="Bình Luận"> 
            </section>
        </form>

              
              
            
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

