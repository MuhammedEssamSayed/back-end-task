<?php  include 'inc/header.php'; ?>
<?php

session_start();

?>
<div class="container m-auto">
    <form action="handlers/handeladd.php" method="POST" enctype="multipart/form-data">
    
    <div class="mb-3 form-group">
        <label  class="form-label">Product Name</label>
        <input type="text" class="form-control" name="proname">
    </div>

    <div class="mb-3 form-group">
        <label  class="form-label">Product Description</label>
        <textarea type="text" class="form-control" name="prodesc"></textarea>
    </div>

    <div class="mb-3 form-group">
        <label  class="form-label">Product Price</label>
        <input type="text" class="form-control" name="price">
    </div>

    <div class="mb-3 form-group">
        <label  class="forma-label">Product Image</label>
        <input class="form-control form-control-sm" id="img" type="file">
    </div>

    <input type="submit" value="Add Product" class="btn btn-info" name="submit">
    </form>
</div>
<?php include 'inc/footer.php'; ?>