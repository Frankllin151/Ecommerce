<?php require "../config.php" ?>
<link rel="stylesheet" href="<?= $Ba_se ?>/assets/css/index.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $Ba_se ?>assets/css/fashion.css">
    <title>Fashion dp_shop</title>
</head>
<body>
<?php 
 require "../header.php";
?>
<section class="area-products-search">
     <div class="sidebar-search">
        Dropdown
     </div>
     <div class="content-search">
      
           <div class="lopa-form"><i class="fa-solid fa-magnifying-glass psq-barsicon"></i></div> 
          <div class="input-writte"> <input type="text"></div>
        
     </div>
</section>
<section id="area-products">
    <div class="just-config">
<div class="products">
   
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
    </div>

</div>
</section>
<?php require "../footer.php"; ?>
</body>
<script src="<?= $Ba_se ?>assets/js/script.js"></script>
</html>