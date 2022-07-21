<div id = "main">
     <?php
     include("slidebar/slidebar.php");
     ?>
            <div class="maincontent">
          <?php
          if(isset($_GET['quanly'])){
               $tam = $_GET['quanly'];
          }else{
               $tam = '';

          }
          if($tam =='danhmucsanpham'){
               include("main/danhmuc.php");
          }
          elseif($tam == 'lienhe'){
               include("main/lienhe.php");

          }
          elseif ($tam == 'themsanpham'){
               include("../trangchu.php");
          }
          else{
               include("main/index.php");
          }
          ?>
                     </div>
    </div> 
