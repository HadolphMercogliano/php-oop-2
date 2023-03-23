<?php

class Product {
  public $id;
  public $name;
  public $price;
  public $brand;
  public $category;
  public $img;
  
  public function __construct(
    int $_id,
    string $_brand,
    string $_name,
    float $_price,
    $_category,
    string $_img 
    ) 
    {
      $this->id = $_id;
      $this->brand = $_brand;
      $this->name = $_name;
      $this->price = $_price;
      $this->category = $_category;
      $this->img = $_img;

    }

    // public function setName($name){
    //   if

    // }
}

class Food extends Product {
  public $weight;
  public $package; 

  public function __construct(
    int $_id,
    string $_brand,
    string $_name,
    float $_price,
    $_category,
    string $_img, 
    float $_weight,
    string $_package
    ) 
    {
      $this->id = $_id;
      $this->brand = $_brand;
      $this->name = $_name;
      $this->price = $_price;
      $this->category = $_category;
      $this->img = $_img;
      $this->weight = $_weight;
      $this->package = $_package;
    }
}

class Toy extends Product {
public $type;
public $material;

public function __construct(
    int $_id,
    string $_brand,
    string $_name,
    float $_price,
    $_category,
    string $_img, 
    string $_type,
    string $_material
    ) 
    {
      $this->id = $_id;
      $this->brand = $_brand;
      $this->name = $_name;
      $this->price = $_price;
      $this->category = $_category;
      $this->img = $_img;
      $this->type = $_type;
      $this->material = $_material;
    }
}

class PetBed extends Product {
public $material;
  
public function __construct(
    int $_id,
    string $_brand,
    string $_name,
    float $_price,
    $_category,
    string $_img, 
    string $_material
     ) 
    {
      $this->id = $_id;
      $this->brand = $_brand;
      $this->name = $_name;
      $this->price = $_price;
      $this->category = $_category;
      $this->img = $_img;
      $this->material = $_material;

    }
}

class Category {
  public $category_name;

  public function __construct(string $_category_name)
  {
    if($_category_name === "") return false;
    $this->category_name = $_category_name;
  }
}

$dog_prod = new Category("dog");
$cat_prod = new Category("cat")
?>