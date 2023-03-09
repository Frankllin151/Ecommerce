<?php 
         require "../dao/eletronicDevicesmysql.php";
         $Eletronic = new Electronicdevicesmysql($pdo);
           
        if($_FILES['fileUpload']['error'] !== UPLOAD_ERR_OK ){
                    echo 'Handle error ';
         } 
         // get extesion 
         
         $extesion = pathinfo($_FILES['fileUpload']['name'] , PATHINFO_EXTENSION);
         
         $nameFile = basename($_FILES['fileUpload']['name'], '.' . $extesion);
         
         $Ulrtimename  =  $nameFile . '_'. time() . rand(0,99) . '.'. $extesion;
         

         $wayTemporay = $_FILES['fileUpload']['tmp_name']; 

         $destiny = '../uploads/' . $Ulrtimename;
            
 
         if(move_uploaded_file($wayTemporay , $destiny)){
                $waydatabse = $Ulrtimename;            
                $name = $_POST['name']; 
                $description = $_POST['description']; 
                $price = $_POST['price']; 
                $type = $_POST['type'];
                $company = $_POST['company'];

                $addnew = new Electronicdevices();
                $addnew->InsertName($name);
                $addnew->InsertDESc($description);
                $addnew->InsertCompAnY($company);
                $addnew->InsertPrice($price); 
                $addnew->InsertType($type);

               



               $Eletronic->InsertItem($addnew);
         }
         else{
          echo 'lascou';
         }




          /*  $name = $_POST['name']; 
            echo $name;

              $description = $_POST['description'];
              echo $description;

              $price = $_POST['price']; 
              echo $price;

              $type = $_POST['type'];
              echo $type;*/

          
    
