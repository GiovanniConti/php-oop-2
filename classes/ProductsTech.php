<?php

include_once __DIR__ . "/ProductsBasic.php";

class ProductsTech extends ProductsBasic {
  protected $type;
  protected $warranty;

  function __construct(array $_productData) {
    $_name = isset($_productData["name"]) ? $_productData["name"] : "";
    $_brand = isset($_productData["brand"]) ? $_productData["brand"] : "";
    $_price = isset($_productData["price"]) ? $_productData["price"] : "";
    $_category = isset($_productData["category"]) ? $_productData["category"] : "";
    $_type = isset($_productData["type"]) ? $_productData["type"] : "";
    $_warranty = isset($_productData["warranty"]) ? $_productData["warranty"] : "";
    
    parent::__construct($_name, $_brand, $_price, $_category);

    $this->setType($_type);
    $this->setWarranty($_warranty);

    // var_dump($_productData);
  }

  public function setType($_type)
  {
    $this->type = $_type;
  }

  public function setWarranty($_warranty)
  {
    $this->warranty = $_warranty;
  }
}