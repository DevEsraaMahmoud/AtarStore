<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 


if(empty($_GET['id'])) {

redirect("products.php");


}

$product = Product::find_by_id($_GET['id']);

if($product) {

$session->message("The {$product->product_name} product has been deleted");

$product->delete_photo();
redirect("products.php");


} else {



redirect("products.php");


}










 ?>