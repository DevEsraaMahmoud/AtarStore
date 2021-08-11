<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>


<?php  
$product = new Product();
$categories = Category::find_all();


if(isset($_POST['create'])) { 


$product->product_name = $_POST['product_name'];
$product->product_price =$_POST['product_price'];
$product->description =$_POST['description'];
$product->category_id =$_POST['category_id'];
$product->set_file($_FILES['product_image']);
$product->upload_photo();

$product->save();
redirect("products.php");

if($product->save()) {

echo "Product uploaded sucessfully"; 


}

    
    


}






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

                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="col-md-6 col-md-offset-3">

                           

                           <div class="form-group">
                            <label for="product_name">اسم المنتج</label>
                            <input type="text" name="product_name" class="form-control" >
                               
                           </div>
                             <div class="form-group">
                                <label for="product_price">سعر المنتج</label>
                            <input type="text" name="product_price" class="form-control" >
                               
                           </div>


                            <div class="form-group">
                                <label for="description">الوصف </label>
                            <input type="text" name="description" class="form-control" >
                               
                           </div>

                            <div class="form-group">
                                <label for="category">الصنف</label>
     <select name="category_id">
         <option>اختر صنف</option>
     <?php foreach($categories as $category): ?>
    <option value="<?= $category->category_id; ?>"> <?= $category->name; ?></option>
    <?php endforeach?>
    </select>                            
                           </div>
                        

                            <div class="form-group">
                                
                                <input type="file" name="product_image" > صورة المنتج
                               <input type="submit" name="create" class="btn btn-primary pull-right" >
                           </div>


                                        
                        </div>


    
          
                           
            </form>










                        
                    </div>
                </div>
                <!-- /.row -->
                 
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>