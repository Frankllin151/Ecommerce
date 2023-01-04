<?php
require 'config.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dop shop</title>
    <link rel="stylesheet" href="<?= $Ba_se ?>/assets/css/index.css">
</head>

<body> 
<?php require "header.php" ?>
 
    <section class="content" style="background-image: url('assets/image/imgback.png');">
        <h1>New Arrivals For men & Women </h1>
        <p>Get The best Women Fashion Arrivals</p>
        <button>Shop Now</button>
    </section>
   <h1 class="pheading">Our Latest Products  </h1>
  
   <section class="sec">
  
    <div class="just-config">
     <div class="products">
           <!----Card star-->
        <div class="card">
            
            <div class="img">
                <img src="assets/image/1.png" alt="">
                <div class="desc">
                    Women
                </div>
                <div class="title">
                    Lady Sandal
                </div>
                <div class="box">
                    <div class="price">$50</div>
                    <button class="btn">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            
            <div class="img">
                <img src="assets/image/2.png" alt="">
                <div class="desc">
                    Women
                </div>
                <div class="title">
                    Lady Sandal
                </div>
                <div class="box">
                    <div class="price">$50</div>
                    <button class="btn">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            
            <div class="img">
                <img src="assets/image/3.png" alt="">
                <div class="desc">
                    Women
                </div>
                <div class="title">
                    Lady Sandal
                </div>
                <div class="box">
                    <div class="price">$50</div>
                    <button class="btn">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            
            <div class="img">
                <img src="assets/image/4.png" alt="">
                <div class="desc">
                    Women
                </div>
                <div class="title">
                    Lady Sandal
                </div>
                <div class="box">
                    <div class="price">$50</div>
                    <button class="btn">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            
            <div class="img">
                <img src="assets/image/5.png" alt="">
                <div class="desc">
                    Women
                </div>
                <div class="title">
                    Lady Sandal
                </div>
                <div class="box">
                    <div class="price">$50</div>
                    <button class="btn">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            
            <div class="img">
                <img src="assets/image/6.png" alt="">
                <div class="desc">
                    Women
                </div>
                <div class="title">
                    Lady Sandal
                </div>
                <div class="box">
                    <div class="price">$50</div>
                    <button class="btn">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            
            <div class="img">
                <img src="assets/image/7.png" alt="">
                <div class="desc">
                    Women
                </div>
                <div class="title">
                    Lady Sandal
                </div>
                <div class="box">
                    <div class="price">$50</div>
                    <button class="btn">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            
            <div class="img">
                <img src="assets/image/8.png" alt="">
                <div class="desc">
                    Women
                </div>
                <div class="title">
                    Lady Sandal
                </div>
                <div class="box">
                    <div class="price">$50</div>
                    <button class="btn">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <!----Card end -->
     </div>
    </div>
   </section>
   <?php require 'footer.php'; ?>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
             $(".menu-btn").click(function(){
                $(".navbar  .menu ").toggleClass("active");
                $(".menu-btn .menu").toggleClass("active");
             })


    </script>
    
</body>
<script src="<?= $Ba_se ?>/assets/js/script.js"></script>
</html>