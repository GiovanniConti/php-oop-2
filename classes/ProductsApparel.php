<?php

include_once __DIR__ . "/ProductsBasic.php";

class ProductApparel extends ProductsBasic {
  protected $type;
  protected $sizes;

  function __construct(array $_productData) {
    $_name = isset($_productData["name"]) ? $_productData["name"] : "";
    $_brand = isset($_productData["brand"]) ? $_productData["brand"] : "";
    $_price = isset($_productData["price"]) ? $_productData["price"] : "";
    $_category = isset($_productData["category"]) ? $_productData["category"] : "";
    $_type = isset($_productData["type"]) ? $_productData["type"] : "";
    $_sizes = isset($_productData["sizes"]) ? $_productData["sizes"] : "";

    parent::__construct($_name, $_brand, $_price, $_category);
    
    $this->setType($_type);
    $this->setSize($_sizes);
  }

  public function setType($_type)
  {
    $this->type = $_type;
    return $this;
  }

  public function setSize($_sizes)
  {
    $this->sizes = $_sizes;
    return $this;
  }
}