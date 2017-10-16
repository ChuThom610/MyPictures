<style type="text/css">
    .required
    {
        color: red;
    }
</style>
<?php include('include/header.php'); ?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12"> 
        <?php 
            include('../sql/myconnect.php');
            include('../sql/kiemtra.php');
            if(isset($_POST['submit']))
            {
                $errors = array();
                if(empty($_POST['title']))
                {
                    $errors[] = 'title';
                }
                else
                {
                    $title=$_POST['title'];
                }
                if(empty($_POST['ordernum']))
                {
                    $ordernum = 0;
                }
                else
                {
                    $ordernum=$_POST['ordernum'];
                }
                $link=$_POST['link'];
                $status=$_POST['status'];
                if(empty($errors))
                {
                    if($_FILES['img']['size']==null)
                        {
                            $message="Bạn chưa chọn file ảnh. Vui lòng chọn file ảnh!";
                        }
                    elseif(($_FILES['img']['type']!="image/gif")
                         && ($_FILES['img']['type']!="image/png")
                         && ($_FILES['img']['type']!="image/jpeg")
                         && ($_FILES['img']['type']!="image/jpg"))
                         {
                            $message="file không đúng định dạng";
                         }
                    elseif($_FILES['img']['size']>1000000)
                        {
                            $message="Kích thước ảnh phải nhở hơn 1MB";
                        }
                    else
                        {
                            $img=$_FILES['img']['name'];   
                            $link_img='upload/'.$img;
                            move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$img);
                                        
                            $query="INSERT INTO tblanh(title, anh, link, ordernum, status) VALUES('{$title}','{$link_img}', '{$link}', $ordernum, $status)";
                            $KQ=mysqli_query($dbc, $query);
                            kiemtra($KQ, $query);
                            if(mysqli_affected_rows($dbc) == 1)
                                echo "<p style='color: green'> Thêm mới thành công</p>";
                            else 
                                echo "<p style='color: red'>Thêm mới không thành công</p>";
                            $_POST['title']='';
                            $_POST['link']='';
                            $_POST['ordernum']='';
                        }
                }
                else
                {
                    $message="<p class='required'> Bạn hãy nhập đầy đủ thông tin</p>";
                }
            }
        ?>
        <form name="mainform" method="POST" enctype="multipart/form-data" >
            <?php 
                if(isset($message))
                    echo $message;
            ?>
            <h3>Thêm ảnh mới</h3>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="<?php if(isset($_POST['title'])) echo $_POST['title']; ?>" class="form-control" placeholder="Title" />
                <?php 
                    if(isset($errors) && in_array('title', $errors))
                    {
                        echo "<p class = 'required'>Bạn chưa nhập tiêu đề. </p>";
                    }
                ?>
            </div>
            <div class="form-group">
                <label>Ảnh đại diện</label>
                <input type="file" name="img" value=""/>
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="text" name="link" value="<?php if(isset($_POST['link'])) echo $_POST['link']; ?>" class="form-control" placeholder="Link ảnh" />
            </div>
            
            <div class="form-group">
                <label>Thứ tự</label>
                <input type="text" name="ordernum" value="<?php if(isset($_POST['ordernum'])) echo $_POST['ordernum']; ?>" class="form-control" placeholder="Thứ tự" />
            </div>
            <div class="form-group">
                <label style="display: block;">Trạng thái</label>
                <label class="radio-online"> <input checked="checked" type="radio" name="status" value="1"/> Hiển thị</label>
                <label class="radio-online"> <input type="radio" name="status" value="0"/> Không hiển thị</label>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Thêm mới"/>
        </form>
    </div>
</div>

<?php include('include/footer.php'); ?>
