<?php

class Products {
  public $id;
  public $name;
  public $price;
  public $brand;
  public $category;
  
  public function __construct(
    int $_id,
    string $_brand,
    string $_name,
    float $_price,
    $_category ) 
    {
      $this->id = $_id;
      $this->brand = $_brand;
      $this->name = $_name;
      $this->price = $_price;
      $this->category = $_category;
    }

    // public function setName($name){
    //   if

    // }
}

class Foods extends Products {
  public $weight;
  public $package; 
}

class Toys extends Products {
public $type;
public $material;
}

class PetBeds extends Products {
public $material;
  
}

class Category {
  public $category_name;

  public function __construct(string $_category_name)
  {
    if($_category_name === "") return false;
    $this->category_name = $_category_name;
  }
}
?>