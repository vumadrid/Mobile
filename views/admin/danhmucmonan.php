<!--Start topbar header-->
<?php include '../admin/header.php'
?>
<div class="content-wrapper">

    <div class="row mt-3">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bordered Table</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Mã Món Ăn</th>
                                    <th scope="col">Tên Món</th>
                                    <th scope="col">Giá Bán</th>
                                    <th scope="col">Giới Thiệu Sản Phẩm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once '../../models/ketnoi.php';
                                $sql = "SELECT * FROM danhmucsp Order by MaSP ASC";
                                $query = mysqli_query($conn, $sql);
                                $rows = mysqli_num_rows($query);
                                while ($rows > 0) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $rows['MaSP'] ?></th>
                                        <td><?php echo $rows['TenSP'] ?></td>
                                        <td><?php echo $rows['GiaBan'] ?></td>
                                        <td><?php echo $rows['GioiThieuSP'] ?></td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include '../admin/footer.php' ?>