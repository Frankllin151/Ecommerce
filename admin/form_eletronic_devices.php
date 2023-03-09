<?php require '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SESSION['base'] ?>admin/action_eletronic.php" method="POST" enctype="multipart/form-data">
         Name: <br>
        <label for=""><input name="name" type="text"></label> <br>
        Description: <br>
        <label for=""><input type="text" name="description"></label> <br>
        Price of Eletronic: <br>
        <label for=""><input type="text" name="price"></label> <br>
           Type of clothes: <br>
        <label for=""><input type="text" name="type"></label> <br>
          Item of which Company: <br>
        <label for=""><input type="text" name="company"></label> <br>
       Choosse  Photo :  <br>
        <label for=""><input type="file" name="fileUpload"></label>
        <br>
        <input type="submit" value="Send">
    </form>


   
</body>
</html>