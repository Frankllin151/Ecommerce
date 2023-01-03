
<?php require "../config.php" ?>

<link rel="stylesheet" href="<?= $Ba_se ?>/assets/css/index.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $Ba_se ?>/assets/css/loginorregister.css">
    <title>Login</title>
</head>
<style>
    .area-register{
        display: none;
    }
</style>
<body>
<?php 
 require "../header.php";
?>
    <section class="content-login" style="background-image: url('<?= $Ba_se?>assets/image/login3.png');">
        <div class="login-register">
          
        <div class="area-rg-lg">
          <div class="btn-area">
            <div class="register-button" id="register-btn">
                Register
               </div>
               <div class="login-button active-lg-rg" id="login-btn">Login</div>
          </div>
          <div class="area-login  ">
            <form action="<?= $Ba_se ?>users/login_action.php" method="post">
               <div class="input-style" >
               <?php
    /// Generate Token 
    $token = openssl_random_pseudo_bytes(16);
              $token = bin2hex($token);

         
        ?>
                <input type="hidden" name="token" value="<?= $token; ?>">
                <div><input type="email" name="email" placeholder="E-mail"></div>
                <div><input type="password" name="password" placeholder="password"></div>
                <div class="btn-login"><input type="submit" value="Login" style="background-color: #f63e4e  ;"></div>
               </div>
            </form>
          </div>
          <div class="area-register ">
            <form action="" method="post">
               <div class="input-style-register" >
                   <div><input type="text" name="name" placeholder="Your Name"></div>
                   <div><input type="email" name="email" placeholder="E-mail"></div>
                   <div><input type="password" name="password" placeholder="password"></div>
                   <div><input type="text" name="cpf" placeholder="Your cpf"></div>
                   <div class="btn-login"><input type="submit" value="Login" style="background-color: #f63e4e  ;"></div>
                  </div>
            </form>
         </div>
        </div>
        </div>
    </section>
 

   

    <?php require "../footer.php"; ?>
</body>
<script src="<?= $Ba_se ?>/assets/js/script.js"></script>
<script src="<?= $Ba_se ?>/assets/js/loginrg.js"></script>
</html>

