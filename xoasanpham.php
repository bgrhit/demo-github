<?php 
    require('./ketnoi.php');
    $id = (int) $_GET['id'];
    $image = "SELECT hinhanh  FROM `sanpham` WHERE `sanpham`.`masp` = $id";
    $query = mysqli_query($conn, $image);
    $after = mysqli_fetch_assoc($query);
    if (file_exists("./img/".$after['hinhanh'])) {
        unlink("./img/".$after['hinhanh']);

    }
    $sql = "DELETE FROM `sanpham` WHERE `sanpham`.`masp` = $id";
    mysqli_query($conn,$sql);
    header("location:trangChu.php");
?>