<?php
    // $ProductID = $_GET['ProductID'];
    // $sql_category = "SELECT * FROM category";
    // $query_category = mysqli_query($connect, $sql_category);

    // $sql_up = "SELECT * FROM news where ProductID = $ProductID";
    // $query_up = mysqli_query($connect, $sql_up);
    // $row_up = mysqli_fetch_assoc($query_up);

    // if(isset($_POST['submit'])){
    //     $Name = $_POST['Name'];
    //     if($_FILES['Img']['name']==''){
    //         $Img = $row_up['Img'];
    //     }
    //     else{
    //         $Img = $row_up['Img'];
    //     }
    //     $Ingredient = $_POST['Ingredient'];
    //     $Recipe = $_POST['Recipe'];
    //     $Cat_ID = $_POST['Cat_ID'];

    //     $sql = "UPDATE news SET Name = '$Name', Img = '$Img', Ingredient = '$Ingredient', Recipe = '$Recipe', Cat_ID = '$Cat_ID' where ProductID = $ProductID";
    //     $query = mysqli_query($connect, $sql);
    //     header('location: QLBaiViet.php?page_layout=danhsach.php');
        
    // }
?>
<!-- <div class="container-fluid content">
    <div class="card">
        <div class="card-header">
            <h2>Sửa bài</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên món</label>
                    <input type="text" name="Name" class="form-control" required value="<?php echo $row_up['Name']?>">
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label> </label>
                    <input type="file" name="Img" class="form-control" value="<?php echo $row_up['Img']?>">
                </div>
                <div class="form-group">
                    <label for="">Nguyên liệu</label>
                    <textarea type="text" name="Ingredient" class="form-control" required
                        value="<?php echo $row_up['Ingredient']?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Công thức</label>
                    <textarea type="text" name="Recipe" class="form-control" required
                        value="<?php echo $row_up['Recipe']?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" name="Cat_ID" required value="<?php echo $row_up['Cat_ID']?>">
                        <?php
                            while($row_category= mysqli_fetch_assoc($query_category)){ ?>
                        <option value=" <?php echo $row_category["Cat_ID"] ?>"><?php echo $row_category["Category"] ?>
                        </option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="foot-btn">
                <button name="submit" class="btn btn-success" type="submit">Sửa</button>
                <button class="btn btn-primary back" ><a href="QLBaiViet.php">Trở về</a></button>
                </div>
                
            </form>
        </div>
    </div>
</div> -->