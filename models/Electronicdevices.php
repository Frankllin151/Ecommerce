<?php 

class Electronicdevices{
 
    public $id; 

    public $name; 

    public $description;
    
    public $price; 

    public $type;
    
    public $company;
    
    public $picture;
     // insert data at database
    public function ValueId(){
        return $this->id;
    }

    public function ValueName(){
        return $this->name;

    }

    public function ValueDeSc(){
        return $this->description;
    }

    public function ValuePriCe(){
        return $this->price;
    }

    public function ValueTyPe(){
        return $this->type;
    }

    public function ValueCompanY(){
        return $this->company;
    }

    public function Valuepct(){
      return $this->picture;
  }


                  // show data
    public function InsertID($I){
      $this->id = $I;
    }

    public function InsertName($NM){
        $this->name = $NM;
      }
    
      public function InsertDESc($DeSC){
        $this->description = $DeSC;
      }

      public function InsertPrice($InsertPrice){
        $this->price = $InsertPrice;
      }

      public function InsertType($TyInsertpe){
        $this->type = $TyInsertpe;
      }

      public function InsertCompAnY($InsertcompaNY){
        $this->company = $InsertcompaNY;
      }


    
    

}
interface ElectronicdevicesDAO{
public function InsertItem(Electronicdevices  $addEle);
}