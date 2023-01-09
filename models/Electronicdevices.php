<?php 

class Electronicdevices{
 
    public $id; 

    public $name; 

    public $description;
    
    public $price; 

    public $type;
    
    public $company;
    
    public $picture;
    
    public function ValueId($vlid){
        return $this->id = $vlid;
    }

    public function ValueName($vname){
        return $this->name = $vname;

    }

    public function ValueDeSc($vDesl){
        return $this->description = $vDesl;
    }

    public function ValuePriCe($vPrice){
        return $this->price = $vPrice;
    }

    public function ValueTyPe($vtYpEd){
        return $this->type = $vtYpEd;
    }

    public function ValueCompanY($ComPANy){
        return $this->company = $ComPANy;
    }

    public function Valuepct($pic){
      return $this->picture = $pic;
  }


                  // Insert Database
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
public function InsertItem($name, $description, $price, $type, $company, $picture);
}