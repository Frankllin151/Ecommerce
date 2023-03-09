<?php 

require "../config.php";

require "../models/Electronicdevices.php";

class Electronicdevicesmysql implements ElectronicdevicesDAO{
   
          private $pdo;

          

        function __construct(PDO $driver)
        {
              $this->pdo = $driver;
        }
      

    public function InsertItem(Electronicdevices  $addEle){
               echo     $addEle->ValueName();

    } 
}