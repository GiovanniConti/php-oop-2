<?php

class UserBasic {
  protected $firstName = "";
  protected $lastName = "";

  function __construct($_firstName, $_lastName) {
    $this-> setFirstName($_firstName);
    $this-> setLastName($_lastName);
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($_firstName)
  {
    $this->firstName = $_firstName;

    return $this;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function setLastName($_lastName)
  {
    $this->lastName = $_lastName;

    return $this;
  }
}