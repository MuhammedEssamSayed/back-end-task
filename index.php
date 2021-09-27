<?php include 'inc/header.php'  ?>
<?php require_once 'classes/Products.php'  ?>
<?php require_once 'classes/Helpers/MyStr.php'  ?>
<?php 

$prod = new Products();
$products =$prod->getAll();


?>
<h1 class="my-5 text-center">Welcome to my website</h1>

<div class="container">
    <div class="row">
        <?php foreach($products as $product)
    {
        ?>
        <div class="col-md-4">
        <div class="item">
            <div class="item-img">
                <img src="images/<?php echo $product['img']?>" class="img-fluid">
            </div>
            <div class="item-desc">
                <h5><?php echo $product['proname']?> <span class="badge bg-info"><?php echo $product['price'] ?></span></h5>
                <p><?php echo MyStr::limit($product['prodesc'])?></p>
                <a href="show.php?id=<?php echo $product['id'] ?>"  class="btn btn-info">Details</a>
                <a href="update.php?id=<?php echo $product['id'] ?>"  class="btn btn-warning ">Update</a>
                <a href="handlers/handledelete.php?id=<?php echo $product['id'] ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    <?php
    }?>

        
    </div>
</div>
<?php include 'inc/footer.php'  ?>