<?php

require_once __DIR__ . "/UserBasic.php";

class UserStandard extends UserBasic {
  protected $email;
  protected $registrationDate;
  protected $exibitionsFreeAccess;


  function __construct($_firstName, $_lastName, $_email){
    parent::__construct($_firstName, $_lastName);

    $this->setEmail($_email);
    $this->setExibitionsFreeAccess();
    $this->setRegistrationDate();
  }

  public function setEmail($_email) 
  {
    if(!filter_var($_email, FILTER_VALIDATE_EMAIL)){
      exit;
    }
    $this->email = $_email;
    return $this;
  }

  public function setExibitionsFreeAccess()
  {
    $this->exibitionsFreeAccess = false;
    return $this;
  }

  public function setRegistrationDate()
  {
    $this->registrationDate = date("d-m-Y");

    return $this;
  }
}