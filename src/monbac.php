<?php
    $sql = "SELECT * FROM news where Cat_ID = 1";
    $query = mysqli_query($connect, $sql);
?>
<body>
<div >
    <div >
        <div class="card-header">
            <h2></h2>
        </div>
        <div >
            <?php
                while($row = mysqli_fetch_assoc($query)){ ?>

            <a href="chitietsanpham.php">
                <div class="food-item">
                    <div class="food-img">
                        <img src="./img/<?php echo $row ['Img']; ?>" alt="">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name"><?php echo $row ['Name']; ?></h2>
                        <div class="line"></div>
                        <h3>Nguyên liệu:</h3>
                        <ul class="ingredient">
                        <?php echo $row ['Ingredient']; ?>
                        </ul>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></i></li>
                        </ul>
                        
                    </div>
                </div>
            </a>
            <?php } ?>
                

        </div>
    </div>
</div>
</body>
<script>
function Del(Name) {

    return confirm("Bạn có chắc chắn muốn xóa bài viết này không: " + Name + "???")
}
</script>