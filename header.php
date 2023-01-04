<?php  
require 'config.php';
//require 'dao/daomysqlUsuario.php'; 





//$daomysql = new UsuariodaomySQ($pdo);
  



 
if( isset( $_SESSION['id_user']) ){
    $id_user = $_SESSION['id_user'] ;    

    
} else{
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  
<nav class="navbar">
        <div class="logo">
            <h1>Dp shop</h1>
            
        </div>
            <ul class="menu ">
                <li><a id="home" href="<?= $Ba_se ?>" >Home</a></li>
                <li><a id="arrivals" href="<?= $Ba_se ?>/partials/newarriavals.php">New Arrivals</a></li>
                <li><a id="fashion" href="<?= $Ba_se ?>/partials/fashion.php">Fashion</a></li>
                <li><a id="account" href="<?= $Ba_se ?>/users/account.php">Account</a></li>
                <li><a id="myshopping" href="<?= $Ba_se ?>users/myshopping.php/<?= $id_user ?>"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        
            <!----Reposinve button-->
            <div class="menu-btn">
                <i class="fa fa-bars "></i>
            </div>
     
    </nav>
</body>
<script src="<?= $Ba_se ?>assets/js/script.js">
</script>
    </nav>
</html>