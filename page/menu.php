<?php
      $sql = "SELECT * FROM `sanpham`";
      $query = mysqli_query($conn,$sql);
       
?>
<div class = "menu">
        <ul class="list_menu">
            <li><a href="index.php"> Trang chủ</a></li>
           <li><a href="index.php?quanly=danhmucsanpham&id=1">Danh mục sản phẩm </a></li>
            <li><a href="index.php?quanly=lienhe"> Liên hệ</a></li>
            <li><a href="trangchu.php?quanly=themsanpham"> Thêm sản phẩm</a></li>
        </ul>
    </div>