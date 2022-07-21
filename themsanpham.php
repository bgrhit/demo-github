<?php 
require("ketnoi.php");
if(isset($_POST["submit"]) ){
    $tensp = $_POST["ten"];
    $gia = $_POST["gia"];
    $hinhanh=$_FILES['hinhanh']['name'];
    // tạo thư mục  => note , tạo thư mục images ở bên ngoài trước nhé
    $target_dir = "./img/";
    // tạo dường dẫn đến file
    $target_file = $target_dir.$hinhanh ;
    
    // check đủ các trường thông tin
    if(isset($tensp) && isset($gia)    && isset($hinhanh)){
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file);
        $sql = "INSERT INTO `sanpham` (`masp`, `tensp`, `gia` , `hinhanh`)
        VALUES(NULL,'$tensp','$gia','$hinhanh')";
        mysqli_query($conn, $sql);
        echo "<script>alert('bạn đã thêm thành công')</script>";
        header("Location:trangchu.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 600px;
        }
        div{
            display: flex;
            margin-bottom: 20px;
        }
        label{
            width: 100px;
        }
        input,textarea{
            flex: 1;
        }
        button{
            margin-left: 100px;
            padding: 6px 12px;
            color: violet;
            background-color: transparent;
            border: 3px solid red;
            border-radius:8px;
            cursor: pointer;
        }
    </style>
    
</head>
<body>
    <a href="trangchu.php">Quay về </a>
    <h1>Thêm sản phẩm</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="ten">Tên sản phẩm</label>
            <input type="text" id='ten' name="ten" >
        </div>
        <div>
            <label for="gia">Gía sản phẩm</label>
            <input type="number" id='gia' name="gia"  >
        </div>
        <div>
            <label for="file">Hình ảnh </label>
            <input type="file"  id="file" name="hinhanh" value="Choose File" >
        </div>
        <button type="submit" name="submit">
        Thêm sản phẩm
        </button>   
    </form>
</body>
</html>
