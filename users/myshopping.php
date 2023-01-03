<?php require "../config.php" ;


require '../dao/daomysqlUsuario.php'; 



$daomysql = new UsuariodaomySQ($pdo);

$daomysql->checkID();


?>

<link rel="stylesheet" href="<?= $Ba_se ?>/assets/css/index.css">
<?php 
 require "../header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 $idexit =  $_SESSION['id'];
 
$nameUSerlogado = $_SESSION['name'];
?>
   <h1><?php echo $nameUSerlogado;  ?></h1>
  <form action="<?= $Ba_se; ?>users/exit.php" method="POST">
    <input type="submit" value="Exit">
               <input type="hidden" name="id"  value="<?= $idexit[0] ?>">
</form>
</body>
</html>