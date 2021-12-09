<?php

include_once __DIR__ . "/UserBasic.php";

class UserPremium extends UserBasic {
  protected $shippingConst = 0;
  protected $discount = "15%";
  protected $exibitionsFreeAccess;

  function __construct($_firstName, $_lastName, $_email) {
    parent::__construct($_firstName, $_lastName, $_email);

    $this->setExibitionsFreeAccess();
  }

  public function setExibitionsFreeAccess()
  {
    $this->exibitionsFreeAccess = true;
    return $this;
  }
}