<?php
session_start();
    include '../classes/Products.php'  ;
    if(isset($_POST['submit']))
    {
    $proname = $_POST['proname'];
    $prodesc = $_POST['prodesc'];
    $price = $_POST['price'];
    

    //if data is valid';
    if(true)
    {
        $product = new Products();
        $prodResult = $product->store($proname  , $price ,$prodesc , 'test.png');

        //if data stored in db
        if( $prodResult == true)
        {
            header("location:../index.php");
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