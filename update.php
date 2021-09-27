<?php include  "inc/header.php" ?>
<?php include "classes/Products.php" ?>


<?php
$id = $_GET['id'];
$editproduct = new Products();

$product = $editproduct->show($id);
// $editproduct = $editproduct->update($name ,$desc , $price ,$create_at);
?>

<div class="container">
    <form action="handlers/handleupdate.php?id=<?php echo $product['id'] ?>" method="POST">
    <div class="mb-3 form-group">
        <label  class="form-label">Product Name</label>
        <input type="text" class="form-control" name="proname" value="<?php  echo $product['proname']  ?>">
    </div>

    <div class="mb-3 form-group">
        <label  class="form-label">Product Description</label>
        <textarea type="text" class="form-control" name="prodesc">
        <?php  echo $product['prodesc']  ?>
        </textarea>
    </div>

    <div class="mb-3 form-group">
        <label  class="form-label">Product Price</label>
        <input type="text" class="form-control" name="price" value="<?php  echo $product['price']  ?>">
    </div>

    <input type="submit" value="update Product" class="btn btn-info" name="submit"> 
    </form>
    
</div>
<?php  include "inc/footer.php"; ?>
