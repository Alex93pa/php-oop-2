<?php


require_once "./classes/products/smartphone.php";
require_once "./classes/payments/creditCard.php";
require_once "./classes/user.php";
require_once "./classes/users/primeUser.php";
require_once "./classes/cart.php";

$user = new PrimeUser("mario Rossi", "mario.rosssi@gmail.com");
$cart = new Cart($user);
$creditCard = new CreditCard(888999887766, "05/2025", "555");

var_dump($creditCard -> getExpiration());

$iphone12 = new smartphone("iphone", 1, 980, "12Pro", "apple");

$cart-> addProduct($iphone12);

var_dump($cart);