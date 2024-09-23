<?php
  require_once '../functions/function.php';

  if(isset($_GET['add-to-cart']) && !empty($_GET['add-to-cart'])){
     $id=$_GET['add-to-cart'];
     $getproduct=mysqli_query($con,"SELECT * FROM post WHERE id='$id");
     $product=mysqli_fetch_array($getproduct);


     $_SESSION['cart_'.$product['id']]=[
         'name'=>$product['title'],
         'quantity'=>1,
         'price'=>$product['price'],
         'ppr'=>$product['ppr'],
     ];

     header('Location: cart.php');
  }
?>