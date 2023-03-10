<?php 
require '../config.php';

require '../models/Users.php';



class UsuariodaomySQ implements UsuarioDao  {
    // variable database 
    private $pdo;

   
    public function __construct(PDO $driver)
    {
      
     
        $this->pdo = $driver;
    }

    public function aDd(Usuario $add){
        $database = $this->pdo->prepare("INSERT INTO USERS (name, password, email, token) VALUES (:name, :password , :email, :token)");

        $database->bindValue(':name', $add->getName());

        $database->bindValue(':email', $add->getEmail());

        $database->bindValue(':password', $add->getPass());

        $database->bindValue(':token', $add->getToken());
        
          $database->execute();
          

        $add->setId($this->pdo->lastInsertId());

          return $add;
    }

    public function  findAll(){
        
    }

    public function findBYemail($email){
       /// check email in of DataBase
     $database = $this->pdo->prepare("SELECT * FROM USERS WHERE email = :email");
        
     $database->bindValue(':email', $email);

     $database->execute();
         // 
     if($database->rowCount() > 0){
 
        $dta = $database->fetch();

        $insert = new Usuario();
     
        $insert->setId($dta['id']);

        $insert->setEmail($dta['email']);

        $insert->setName($dta['name']);

        $insert->setPass($dta['password']);

        return $insert;
         
     } else{
            return false;
     } 

    }
    
    public function deleTe( $id){
        
    }
  
      public function checkToken($Tokencheck, $logineml, $md5Pass){
           // E-mail and Password in database if they exists at DAtabase
           $dbEmail = $this->pdo->prepare("SELECT email FROM USERS WHERE password = :password AND email = :email ");

           $dbEmail->bindValue(':password', $md5Pass);

           $dbEmail->bindValue(':email', $logineml);

           $dbEmail->execute();

           $checkEmail = $dbEmail->fetch();

       $echoEmail = $checkEmail[0];
    
     if($echoEmail == null){
       header('Location: http://127.0.0.1/DPshopp/login.php');
     
      }

     if($logineml === $echoEmail){

          // check password in database
           $dbPass = $this->pdo->prepare("SELECT password FROM USERS  WHERE email = :email ");

           $dbPass->bindValue(':email', $logineml);

           $dbPass->execute();

           $checkPassword = $dbPass->fetch();
                   
           $passKey = $checkPassword[0];

           if($passKey === $md5Pass){
                 // check Token if he exists 
            $sql = $this->pdo->prepare("SELECT token FROM USERS WHERE email = :email AND password = :password ");
            
            $sql->bindValue(':email',  $logineml);
            
            $sql->bindValue(':password', $md5Pass);
     
             $sql->execute();
                // Get id of user
             $idLook = $this->pdo->prepare("SELECT id FROM USERS WHERE email = :email AND password = :password ");
             
            $idLook->bindValue(':email', $logineml);

            $idLook->bindValue(':password', $md5Pass);

          $idLook->execute();
             
             $idGet = $idLook->fetch(); 

             $id = $idGet[0];

            
             // get Token in DataBase
             $seecont = $sql->fetch();
           
             $token =  $seecont[0];
            
    
           
            if($token === ''){
              //generated
               
      
                 $insertToken = $this->pdo->prepare("UPDATE USERS SET token = :token WHERE id = :id ");
                 
              $insertToken->bindValue(':id', $id);
      // insert token into Database
            $insertToken->bindValue(':token', $Tokencheck);
                
            $insertToken->execute();

            header('Location: http://127.0.0.1/DPshopp/users/myshopping.php/'.$id);

            

            

            } else{
              
               header('Location: http://127.0.0.1/DPshopp/users/myshopping.php/'.$id);
         
        
            }
           } else{
             echo 'failed password not find in USERS';

           }

     } else{
      header("Location: http://127.0.0.1/DPshopp/users/account.php");
      
     }

      }
      public function checkID(){
        $UrlAtual= "$_SERVER[REQUEST_URI]";
         $idUSEr = explode('/', $UrlAtual);
            
         $idUSuARIOatual = $idUSEr[4];
              
         

       

        $idDTbs = $this->pdo->prepare('SELECT *  FROM USERS WHERE id = :id');

        $idDTbs->bindValue(':id', $idUSuARIOatual);

        $idDTbs->execute();
        
        $idGetAll = $idDTbs->fetch();
       
       
        if($idGetAll['id'] == $idUSuARIOatual){
         
          

          $_SESSION['id_user'] = $idUSEr[4];

          $_SESSION['id'] = $idGetAll;
          
          $_SESSION['name'] = $idGetAll['name'];
          
          if(!$idGetAll['token']){
            header("Location: http://127.0.0.1/DPshopp/users/account.php");  
          } else{
           
         
          
     
          }
          
        } else{
          header("Location: http://127.0.0.1/DPshopp/users/account.php");
        }
        
       
          
        
      }


      public function resetPassword(Usuario $password){
      
      } 
}