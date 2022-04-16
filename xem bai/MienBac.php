<!-- Header -->
<?php
require "public/header.php";
require "config/db.php"
?>
<head>
    <link rel="stylesheet" href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Document</title>
</head>

<!-- Body -->
<body>
    <section class="content category">
        <div class="cat-container">
            <div class="cat-head">
                <h2>MÓN ĂN MIỀN BẮC</h2>
                <P>Ẩm thực miền Bắc toát lên sự tinh tế, nhẹ nhàng thanh tao cũng giống như những người con của Hà Nội vậy. Dân dã, dung dị nhưng vẫn đủ tinh tế để tạo ấn tượng sắc nét về một nền ẩm thực của đất kinh kì trên bản đồ ẩm thực Việt Nam. </P>
            </div>
            <!-- <div class="food-items"> -->
                <?php
                    $sql = "SELECT * FROM news WHERE Cat_ID = 1";
                    $result = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_array($result)){ ?>            
                    <a href="chitietsanpham.php?ProductID=<?php echo $row['ProductID']?>">
                        <div class="food-item">
                            <div class="food-img">
                                <img src="./img/<?php echo $row ['Img']?>">
                            </div>
                            <div class="food-content">
                                <h2 class="food-name"><?php echo $row ['Name']; ?></h2>
                                <div class="line"></div>
                                <h3>Nguyên liệu:</h3>
                                <ul class="ingredient">
                                <?php echo $row ['Ingredient']; ?>
                                </ul>                            
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>        
    </section>

<!-- footer -->
<?php
require "public/footer.php"
?>

</body>
</html>