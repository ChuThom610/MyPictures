<?php include('include/header.php')  ?>
<?php include('../sql/myconnect.php')?>
<?php include('../sql/kiemtra.php')?>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3> Danh sách ảnh</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Ảnh</th>
                        <th>Link</th>
                        <th>Thứ tự</th>
                        <th>Trạng thái</th>
                        <th>Chỉnh sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query="SELECT * FROM tblanh ORDER BY ordernum DESC";
                    $KQ=mysqli_query($dbc, $query); 
                    kiemtra($KQ, $query);
                    while($anh = mysqli_fetch_array($KQ, MYSQLI_ASSOC));
                    {
                    ?>
                    <tr>
                        <td><?php echo $anh['ID']; ?></td>
                        <td><?php echo $anh['title']; ?></td>
                        <td><img width="80" src="<?php echo $anh['anh']; ?>" /></td>
                        <td><?php echo $anh['link']; ?></td>
                        <td><?php echo $anh['ordernum']; ?></td>
                  
                        <td>
                            <?php 
                                if($anh['status'] == 1)
                                    echo 'Hiển thị';
                                else 
                                    echo 'Không hiển thị';
                            ?>         
                        </td>
                        <td><a href=""> <img width="25" src="../images/edit.png" /></a></td>
                        <td><a href="delete_anh.php? ID=<?php echo $anh['ID'] ?>" onclick="return confirm('Bạn có muốn xóa hay không?')" > <img width="25" src="../images/delete.png" /></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<?php include('include/footer.php')?>