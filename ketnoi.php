<?php
$severname = "localhost";
$username = "root";
$pwd = "";
$name  = "banhang";
$conn = mysqli_connect($severname,$username,$pwd,$name);
if ($conn == false){
  echo"Ket noi that bai";
}
?>