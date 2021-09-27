
<?php include 'inc/header.php'  ?>
<?php require_once 'classes/Products.php'  ?>
<?php
$id = $_GET['id'];
$product = new Products();
$product = $product->show($id);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="images/<?php echo $product['img']?>" alt="">
        </div>
        <div class="col-md-6">
            <h3><?php echo $product['proname']?></h3>
            <h6><?php echo $product['price']?></h6>
            <p><?php echo $product['prodesc']?></p>
            <a href="index.php"  class="btn btn-info">Back</a>
            <a href=""  class="btn btn-warning">Update</a>
            <a href="" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>




<?php include 'inc/footer.php'  ?>