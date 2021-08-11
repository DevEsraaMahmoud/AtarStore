
<?php include("includes/header.php"); ?>

<?php include("includes/photo_library_modal.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 


$categories = Category::find_all();

if(empty($_GET['id'])) {

redirect("products.php");

}

$product = Product::find_by_id($_GET['id']);


if(isset($_POST['update'])) {


if($product) {

$product->product_name = $_POST['product_name'];
$product->product_price =$_POST['product_price'];
$product->description =$_POST['description'];
$product->category_id =$_POST['category_id'];
    

if(empty($_FILES['product_image'])) {

$product->save();
redirect("products.php");
$session->message("The product has been updated");

} else {

$product->set_file($_FILES['product_image']);
$product->upload_photo();
$product->save();
$session->message("The product has been updated");

// redirect("edit_product.php?id={$product->id}");
redirect("products.php");



}







}



}




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
                            products
                            <small>Subheading</small>
                        </h1>
<!--
                      <div class="col-md-6 product_image_box">
                          
                         <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="<?php /*echo $product->image_path_and_placeholder(); */?>" alt=""></a>



                      </div>-->


                    <form action="" method="post" enctype="multipart/form-data">

  


                        <div class="col-md-6">

                           <div class="form-group">
                           
                            <input type="file" name="product_image">
                               
                           </div>


                         <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" class="form-control"value="<?php echo $product->product_name; ?>" >
                               
                           </div>
                             <div class="form-group">
                                <label for="product_price">Product Price</label>
                            <input type="text" name="product_price" class="form-control" value="<?php echo $product->product_price; ?>" >
                               
                           </div>


                            <div class="form-group">
                                <label for="description">Description </label>
                            <input type="text" name="description" class="form-control" value="<?php echo $product->description; ?>" >
                               
                           </div>

                            <div class="form-group">
                                <label for="category_id">Category</label>
                                
        <select name="category_id">
         <option>Select Category</option>
     <?php foreach($categories as $category): ?>
    <option value="<?= $category->id; ?>"> <?= $category->name; ?></option>
    <?php endforeach?>
    </select>                            
               
                               
                           </div>
                            <div class="form-group">

                            <a id="product-id" class="btn btn-danger" href="delete_product.php?id=<?php echo $product->id; ?>">Delete</a>

                            <input type="submit" name="update" class="btn btn-primary pull-right" value="Update" >
                               
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