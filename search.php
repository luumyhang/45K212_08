<!-- Header -->
<?php
require "public/header.php"
?>

<!-- Body -->
<body>
<?php
            //ket noi co so du lieu
            $conn = mysqli_connect("localhost","root","","products");
            //truy van du lieu
            if(isset($_GET["search"]) && !empty ($_GET["search"]))
            {
                $key = $_GET["search"];
                $sql = "SELECT * FROM news WHERE Name LIKE '%$key%' OR Ingredient LIKE '%$key%' OR Recipe LIKE '%$key%'";  
            }
            else {
                $sql = "SELECT * FROM news";
            }
            $result = mysqli_query($conn,$sql);
        ?>

<section class="content category">
    <div class="cat-container">
        <div class="cat-head">
            <h2>Kết quả tìm kiếm:<?php echo $_GET["search"]; ?></h2>
        </div>
        
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $Img = $row["Img"];
                $Name = $row["Name"];
                $Ingredient = $row["Ingredient"];
            ?>
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
</section>
            <?php
            mysqli_close($conn); ?>
<!-- footer -->
<?php
require "public/footer.php"
?>

</body>
</html>