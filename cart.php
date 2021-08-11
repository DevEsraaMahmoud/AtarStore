<!DOCTYPE html>
<?php include("includes/header.php"); ?>
<?php 

if(isset($_GET['add'])) {

$products = Product::find_by_id($_GET['add']);
if($products->product_quantity != $_SESSION['product_' . $_GET['add'] ]){
   $_SESSION['product_' . $_GET['add'] ]+=1 ;
    redirect('checkout.php');

}else{
        echo "we only have" . $products->product_quantity . "Availablel";
        redirect('checkout.php');

}

/*$_SESSION['product_' . $_GET['add'] ]+=1 ;
    redirect("index.php");*/

}
if(isset($_GET['remove'])) {
$_SESSION['product_' . $_GET['remove'] ]-- ;
  if($_SESSION['product_' . $_GET['remove'] ] <1){
      unset($_SESSION['item_total']);
      unset($_SESSION['item_quantity']);
      redirect('checkout.php');

  } else{
        redirect('checkout.php');

  }                      
                         
                         
                         
                        }


if(isset($_GET['delete'])) {

 unset($_SESSION['product_' . $_GET['delete'] ]);                 
  unset($_SESSION['item_total']);
  unset($_SESSION['item_quantity']);
 redirect('checkout.php');
                   
}













?>

















