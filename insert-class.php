<?php
class insert{
  private $name;
  private $price;
  private $type;
  private $description;
  private $image;
  private $condition;

  function __construct($name, $price, $type, $description, $image, $condition){
    $this->name =$name;
    $this->price= $price;
    $this->type = $type;
    $this->description =$description;
    $this->image = $image;
    $this->condition = $condition;
  }

  function insert_query(){
    $sql = "INSERT INTO products (prod_name, prod_price, prod_type,  prod_description, prod_img, prod_condition)
    VALUES ('$this->name', '$this->price', '$this->type', '$this->description', '$this->image', '$this->condition')";
    return $sql;
  }
}
?>
