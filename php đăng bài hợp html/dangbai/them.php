<?php
    $sql_category = "SELECT * FROM category";
    $query_category = mysqli_query($connect, $sql_category);

    if(isset($_POST['submit'])){
        $Name = $_POST['Name'];
        $Img = $_FILES['Img']['name'];
        $Img_tmp = $_FILES['Img']['tmp_name'];
        $Ingredient = $_POST['Ingredient'];
        $Recipe = $_POST['Recipe'];
        $Cat_ID = $_POST['Cat_ID'];

        $sql = "INSERT INTO news (Name, Img, Ingredient, Recipe, Cat_ID)
        VALUES ( '$Name','$Img','$Ingredient', '$Recipe','$Cat_ID')";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($Img_tmp, 'img/'.$Img);
        header('location: QLBaiViet.php?page_layout=danhsach.php');
        
    }
?>
<div class="container-fluid content">
    <div class="card">
        <div class="card-header">
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
            <h2>Thêm bài</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên món</label>
                    <input type="text" name="Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label> </label>
                    <input type="file" name="Img" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nguyên liệu</label>
                    <input type="text" name="Ingredient" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Công thức</label>
                    <input type="text" name="Recipe" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" name="Cat_ID" required>
                        <?php
                            while($row_category= mysqli_fetch_assoc($query_category)){ ?>
                        <option value="<?php echo $row_category["Cat_ID"] ?>"><?php echo $row_category["Category"] ?>
                        </option>
                        <?php }
                        ?>
                    </select>
                </div>
                <button name=" submit" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>