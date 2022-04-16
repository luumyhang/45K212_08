<?php
    $sql = "SELECT * FROM news INNER JOIN category on news.Cat_ID = category.Cat_ID";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid content">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <th class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Nguyên liệu</th>
                        <th>Cách làm</th>
                        <th>Danh mục</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </th>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($query)){ ?>
                    <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td><?php echo $row ['Name']; ?></td>
                        <td>
                            <img style="width: 100%;" src=" ./img/<?php echo $row ['Img']?>">
                        </td>
                        <td><?php echo $row ['Ingredient']; ?></td>
                        <td><?php echo $row ['Recipe']; ?></th>
                        <td><?php echo $row ['Cat_ID']; ?></td>

                        <td>
                            <a href="QLBaiViet.php?page_layout=sua&ProductID=<?php echo $row['ProductID']; ?>">Sửa</a>
                        </td>
                        <td>
                            <a onclick="return Del('<?php echo $row['Name']; ?>')"
                                href="QLBaiViet.php?page_layout=xoa&ProductID=<?php echo $row['ProductID']; ?>">Xóa</a>
                        </td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <a class="btn btn-primary" href="QLBaiViet.php?page_layout=them">Thêm</a>

        </div>
    </div>
</div>
<script>
function Del(Name) {

    return confirm("Bạn có chắc chắn muốn xóa bài viết này không: " + Name + "???")
}
</script>