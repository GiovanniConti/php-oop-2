<?php
require_once "./data/products.php";
require_once "./data/users.php";
require_once "./classes/UserPremium.php";
require_once "./classes/UserStandard.php";
require_once "./classes/ProductsBasic.php";
require_once "./classes/ProductsTech.php";
require_once "./classes/ProductsApparel.php";

$usersList = [];
$productsList = [];

foreach ($users as $user) {
  try {
    if($user["accountType"] === "Premium"){
      $usersList[] = new UserPremium($user["name"], $user["lastname"], $user["mail"]);
    } else {
      $usersList[] = new UserStandard($user["name"], $user["lastname"], $user["mail"]);
    }
  } catch (Exception $e){
    echo "Impossibile generare l'istanza per l'utente " . $user["name"] . " " . $user["lastname"];
    echo $e->getMessage() . "<br>";
  }
}

// var_dump($usersList);

foreach ($products as $product) {
  if($product["category"] === "tech"){
    $productsList[] = new ProductsTech($product);
  } else {
    $productsList[] = new ProductApparel($product);
  }
  // var_dump($product);
}

var_dump($productsList);