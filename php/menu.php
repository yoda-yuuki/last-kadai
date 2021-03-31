<?php

class Menu{
    private $id;
    private $name;
    private $img;
    private $price;
    private $amount;

 public function __construct($id,$name,$img,$price){
   $this->id = $id;
   $this->name = $name;
   $this->img = $img;
   $this->price = $price;
   $this->amount = 0;
 }
 public function getId(){
     return $this->id;
 }
 public function getName(){
     return $this->name;
 }
 public function getImg(){
     return $this->img;
 }
 public function getPrice(){
     return $this->price;
 }
 public function getAmount(){
     return $this->amount;
 }
 public function setAmount($amount){
    $this->amount = $amount;
 }
 public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
 public function getTotalprice(){
     return $this->getTaxIncludedPrice() * $this->amount;
 }
}
?>