<?php
    $sql = "SELECT * FROM news where Cat_ID = 3";
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
            <!-- <div class="pr-cat">
                <li class="pr-1">
                    <a class="pr-name"><h1><?php echo $row ['Name']; ?></h1></a>                         
                    <a href="" ><img class="pr-img" style="width: 20%;" src=" ./img/<?php echo $row ['Img']?>"></a>
                </li>
                <li class="pr-2"><?php echo $row ['Ingredient']; ?></li>
            </div>\ -->
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