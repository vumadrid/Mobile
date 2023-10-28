<!--Start topbar header-->
<?php include '../admin/header.php' ?>
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
                                    <th scope="col">UserName</th>
                                    <th scope="col">PassWord</th>
                                    <th scope="col">Họ Và Tên</th>
                                    <th scope="col">Địa Chỉ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once '../../models/ketnoi.php';
                                $sql = "SELECT * FROM user";
                                $query = mysqli_query($conn, $sql);
                                while ($rows = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $rows['UserName']; ?></th>
                                        <td><?php echo $rows['PassWord']; ?></td>
                                        <td><?php echo $rows['Ho'] . ' ' . $rows['Ten']; ?></td>
                                        <td><?php echo $rows['DiaChi']; ?></td>
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
<!--Start footer-->
<?php include '../admin/footer.php' ?>
<!--End footer-->