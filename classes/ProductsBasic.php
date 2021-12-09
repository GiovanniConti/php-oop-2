<?php

class ProductsBasic {
  protected $name;
  protected $brand;
  protected $price;
  protected $category;

  function __construct($_name, $_brand, $_price, $_category) {
    $this->setName($_name);
    $this->setName($_brand);
    $this->setName($_price);
    $this->setName($_category);
  }

  public function setName($_name)
  {
    $this->name = $_name;
    return $this;
  }

  public function setBrand($_brand)
  {
    $this->brand = $_brand;
    return $this;
  }

  public function setPrice($_price)
  {
    $this->price = $_price;
    return $this;
  }

  public function setCategory($_category)
  {
    $this->category = $_category;
    return $this;
  }
}