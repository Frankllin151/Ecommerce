<?php 
// Check login 
require '../config.php';
$Dados = $_POST;

$Email = $Dados['email'];

$password = $Dados['password'];

$_SESSION['password'] = $password; 

$_SESSION['email'] = $Email;

$Admin = $pdo->prepare('SELECT * FROM `ADMIN`');

$Admin->execute();

$Admins = $Admin->fetchAll();


foreach ($Admins as $admUser) {
  if (($admUser['password'] === md5($password)) && ($admUser['email'] === $Email )) {
      $logado =   $admUser['email'];
  
  } else {
    header('Location: http://127.0.0.1/DPshopp/');
 
  }
}

require "../dao/eletronicDevicesmysql.php";

$EletroNiCDeVices = new Electronicdevicesmysql($pdo);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $Ba_se ?>/assets/css/index.css">
    <title>Acesso Restrito</title>
</head>
<body>
   <?php require "../header.php"; ?>
<h1> <?php 
     echo 'Você está logado:'.$logado;
    
    ?></h1>

    <a href="<?= $_SESSION['base'] ?>admin/form_eletronic_devices.php">Add Eletronic Devices</a>
</body>
</html>