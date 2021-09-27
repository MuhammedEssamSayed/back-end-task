<?php
session_start();
    require_once "../classes/Products.php" ;

    $id = $_GET['id'];
    if(isset($_POST['submit']))
    {
    $proname = $_POST['proname'];
    $prodesc = $_POST['prodesc'];
    $price = $_POST['price'];

    if(true)
    {
        $product = new Products();
        $prodResult = $product->update($proname  , $price ,$prodesc ,$id  );

        //if data stored in db
        if( $prodResult == true)
        {
        header("location:../show.php?id=".$id);
        }
        else
        {

        }
    }
    else 
    {

    }
}
else 
{
    header("location:../create.php");
}
echo "success";
?>