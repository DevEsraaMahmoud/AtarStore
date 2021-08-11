<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 


if(empty($_GET['id'])) {

redirect("categories.php");


}

$category = Category::find_by_id($_GET['id']);

if($category) {


$category->delete();
redirect("categories.php");


} else {



redirect("categories.php");


}










 ?>