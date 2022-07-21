
<?php
    require("ketnoi.php");
    $sql = "SELECT * FROM `sanpham`";
    $query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    function xoasanpham(){
        var conf = confirm(`bạn có muốn xóa sản phẩm hay không ?`);
        return conf;
    }
</script>
<style>
        #productList {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #productList td, #productList th {
            border: 1px solid blue;
            padding: 8px;
        }

        #productList tr:nth-child(even){background-color: white;}

        #productList tr:hover {background-color: wheat;}

        #productList th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: violet;
            color: black;
        }
        button{
            background-color: gray;
            padding:8px 16px;
           
        } button a{
            color: white;
           
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Danh sách sản phẩm được thêm </h1>
    <button>
        <a href="themsanpham.php">Thêm sản phẩm</a>
    </button>
    <table id="productList">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Hành động</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $row["masp"] ?></td>
            <td><?= $row["tensp"] ?></td>
            <td><?= $row["gia"] ?>&nbsp; VNĐ</td>
            <td><img style="width: 200px;height:200px" src='./img/<?= $row["hinhanh"] ?>' alt=""></td>
            <td><a href="suasanpham.php?id=<?= $row['masp']?>">Sửa</a>
                <a  onclick="return xoasanpham()" href="xoasanpham.php?id=<?= $row['masp']?>">xóa</a>  
            </td>
        </tr>
        <?php }?>
    </table>
    
</body>
</html>

