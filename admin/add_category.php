<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 

$message = "";

$category= new Category();


if(isset($_POST['create'])) {


if($category) {


$category->name = $_POST['name'];

$category->save();
redirect("categories.php");


}

/*
$product->set_file($_FILES['product_image']);
*/

/*if($product->save()) {

$message = "category{$product->filename} uploaded sucessfully"; 


} else {

$message = join("<br>", $product->errors);


}*/




}




 ?>

<?php 



/*$category= new Product();

if(isset($_POST['create'])) {


if($product) {


$product->product_name = $_POST['product_name'];
$product->product_price =$_POST['product_price'];
$product->product_image =$_POST['product_image'];
$product->description =$_POST['description'];
$product->category =$_POST['category'];


$product->set_file($_FILES['product_image']);
$product->upload_photo();
$session->message("The category{$product->product_name} has been added");
$product->save();
redirect("products.php");


}*/


// if($product) {

// $product->title = $_POST['title'];
// $product->caption = $_POST['caption'];
// $product->alternate_text = $_POST['alternate_text'];
// $product->description = $_POST['description'];

// $product->save();

// }



/*}*/





// $products = product::find_all();

 ?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->



        <?php include("includes/top_nav.php") ?>





            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           

    
        <?php include("includes/side_nav.php"); ?>




            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categories
                            <small>Subheading</small>
                        </h1>
                        <?php echo $message; ?>

                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="col-md-6 col-md-offset-3">


                           <div class="form-group">
                            <label for="name">category name</label>
                            <input type="text" name="name" class="form-control" >
                               
                        
                        

                            <div class="form-group">
                                
                            <input type="submit" name="create" class="btn btn-primary pull-right" >
                               
                           </div>


                            

                        </div>



                      

            </form>










                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>