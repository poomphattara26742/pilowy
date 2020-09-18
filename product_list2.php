<!doctype html>
<html lang="zxx">

<?php
require("head.html");
require('connectDB.php');


?>

<body>
<!--::header part start::-->
<?php
require("header.php");
?>
<!-- Header part end-->

<!-- breadcrumb part start-->
<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>รายการสินค้าของเรา</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!-- product list part start-->
<section class="product_part2">
<div class="container">

<div class="row">

<div class="col">
<h4>หมอนยางพารา Cotton 100%</h4>
</div>





<div class="col">
<div class="d-flex flex-row-reverse">

            

<div class="p-2">
            <button type="button" class="btn_listproduct">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
               </svg>
            </button>
            
</div>


<div class="p-2"> 
          <a href="product_list1.php?id=1" >
              <button type="button" class="btn_gridfill">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-grid-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
              </svg>
              </button>
           </a>
</div>


<div class="p-2">
     <button class="btn_sortby dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ราคา</button>
   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">ราคาถูก-ราคาแพง</a>
      <a class="dropdown-item" href="#">ราคาแพง-ราคาถูก</a>
   </div>
</div>


<div class="p-2">
<h4 class="">เรียงตาม</h4>
</div>


          


</div>
</div>


</div>

<br><br>
     





<div class=card-grid2>

<div class="card-lanscape">
    
   <div class="d-flex flex-row">
         <div class="p-2">
        <img class="img_product2" src="img/single_product_2.webp" alt="">
         </div>

        <div class="p-2">

        <div class="content">
           <h4 class="Txt_ProductName">Contour</h4>
           <h4 class="Txt_ProductName">ชื่อหมอน ก</h4><br>
           <h1 class="Txt_price">480 บาท</h1>
           <a href="single-product1.php?id=1" class="Btn_BuyProduct2 ml-auto mr-auto">สั่งซื้อสินค้า</a>
      </div>     
    </div>

</div>

</div>




<div class="card-lanscape">
    
   <div class="d-flex flex-row">
         <div class="p-2">
        <img class="img_product2" src="img/single_product_7.webp" alt="">
         </div>

        <div class="p-2">

        <div class="content">
           <h4 class="Txt_ProductName">Heart/Durian</h4>
           <h4 class="Txt_ProductName">ชื่อหมอน ข</h4><br>
           <h1 class="Txt_price">600 บาท</h1>
           <a href="single-product2.php?id=2" class="Btn_BuyProduct2 ml-auto mr-auto">สั่งซื้อสินค้า</a>
      </div>     
    </div>

</div>
</div>
 


<div class="card-lanscape">
    
   <div class="d-flex flex-row">
         <div class="p-2">
        <img class="img_product2" src="img/single_product_1.webp" alt="">
         </div>

        <div class="p-2">

        <div class="content">
           <h4 class="Txt_ProductName">Massage/Knobby</h4>
           <h4 class="Txt_ProductName">ชื่อหมอน ค</h4><br>
           <h1 class="Txt_price">777 บาท</h1>
           <a href="single-product3.php?id=3" class="Btn_BuyProduct2 ml-auto mr-auto">สั่งซื้อสินค้า</a>
      </div>     
    </div>

</div>
</div>
 





</div>


  

   

</div> 

</section>
<!-- product list part end-->

<!--::footer_part start::-->
<?php
require("footer.php");
?>
<!--::footer_part end::-->

<!-- jquery plugins here-->
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="js/swiper.min.js"></script>
<!-- swiper js -->
<script src="js/mixitup.min.js"></script>
<!-- particles js -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>

</html>
