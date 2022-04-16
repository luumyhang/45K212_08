<?php
    $sql = "SELECT * FROM users";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid content">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách tài khoản</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <th class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên tài khoản</th>
                        <th>Loại tài khoản</th>
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
                        <td><?php echo $row ['username']; ?></td>
                        <td><?php echo $row ['level']; ?></td>
                        <td>
                            <a onclick="return Del('<?php echo $row['username']; ?>')"
                                href="QLTaiKhoan.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xóa</a>
                        </td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
function Del(username) {

    return confirm("Bạn có chắc chắn muốn xóa tài khoản này không: " + username + "???")
}
</script>