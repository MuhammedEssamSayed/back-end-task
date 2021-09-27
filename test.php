<?php
require_once 'classes/MyPdo.php';
require_once 'classes/Products.php';
// $mysql = new MyPdo
$product = new Products();
// var_dump($product->show(1));

echo  $product->delete(3);
// $pdo = new MyPdo();
// $pdo->connect();
