   
<?php
include '../classes/Products.php'  ;
$product = new Products();
$id = $_GET['id'];

$product->delete($id);

header("location:../index.php");