<?php require "../config.php" ;?>
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
     <div class="dropdown">
        <button id="button-click-open-drop" class="btn-opn">Categoria</button>
        <div id="drop-down" class="dropdown-content">
          <span class="tagaget" href="#home">Home</span>
          <span class="tagaget" href="#about">About</span>
          <span class="tagaget" href="#contact">Contact</span>
        </div>
      </div>
     </div>
     <div class="content-search">
      <form action="" method="post">
           <div class="lopa-form"><i class="fa-solid fa-magnifying-glass psq-barsicon"></i></div> 
          <div class="input-writte"> <input type="text"></div>
          </form>
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

<script>
    const getDropdown = document.getElementById("button-click-open-drop");
const getBody = document.querySelector('body');
getDropdown.addEventListener('click', (e) =>{
    document.getElementById('drop-down').classList.toggle('show');
  
});
// change text of button for tag <a> of html dropdown
var getdropA = document.querySelectorAll('.tagaget');

getdropA.forEach(txtTagA =>{
               txtTagA.addEventListener('click' , (e) =>{
                           const text = e.target.textContent; 
                           const button = document.getElementById('button-click-open-drop'); 
                           button.textContent = text;
               });
});

window.addEventListener('click', (even)  => {
   if(!even.target.matches('.btn-opn')){
    var dropdowns  = document.getElementsByClassName('dropdown-content');
   
    var i;
    for(i = 0; i < dropdowns.length; i++){
              var Opendropdown =  dropdowns[i];
             
              if(Opendropdown.classList.contains('show')){
                           Opendropdown.classList.remove("show");
                           
                         
              }
    }

   }
});
</script>
</html>