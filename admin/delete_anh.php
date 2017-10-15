<?php
include('../sql/myconnect.php');
include('../sql/kiemtra.php');
    if(isset($_GET['ID']) && filter(($_GET['ID']), FILTER_VALIDATE_INT, array('min_range' =>1)))
    {
        $ID = $_GET['ID'];
        $sql = "SELECT anh FROM tblanh WHERE ID={$ID}";
        $query_anh=mysqli_query($dbc, $sql);
        $anh_info=mysqli_fetch_assoc($query_anh);
        unlink('../'.$anh_info['anh']);
        $query="DELETE FROM tblanh WHERE id={$ID}";
        $KQ=mysqli_query($dbc, $query);
        kiemtra($KQ, $query);
        header('location: list_anh.php');
    }
    else
    {
        header('location: list_anh.php');
    }
?>


