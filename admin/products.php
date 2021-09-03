<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 

$products = Product::find_all();
/*$categories = Category::find_all();*/






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
                            <small></small>
                        </h1>

                        <p class="bg-success"> <?php echo $message; ?></p>

                            <a href="add_product.php" class="btn btn-primary">اضافة منتج</a>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>المنتج</th>
                                        <th>Id</th>
                                        <th>اسم المنتج</th>
                                        <th>سعر المنتج</th>
                                        <th>الوصف</th>
                                        <th> الكمية المتاحة</th>
                                        <th>الصنف</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($products as $product): ?>

                                    <tr>
                                         <td>
                                             <img class="admin-photo-thumbnail product_image" src="<?php echo $product->image_path_and_placeholder(); ?>" alt="">
                                        </td>
                                        
                                        
                                        <td><?php echo $product->id; ?> </td>
                                            <td><?php echo $product->product_name; ?>
                                                
                                        	  <div class="action_links">

                                                <a href="delete_product.php?id=<?php echo $product->id; ?>">Delete</a>
                                                <a href="edit_product.php?id=<?php echo $product->id; ?>">Edit</a>
                    
                                                
                                            </div>
                                        </td>   
                                        <td><?php echo $product->product_price; ?></td>
                                       <td><?php echo $product->description; ?></td>
                                       <td><?php echo $product->product_quantity; ?></td>

                                       <td><?php
                                           $pro_id = $product->category_id;
                                           $category = Category::find_by_id($pro_id);

                                           echo $category->name  ?></td>
                                       <td>

<!--

                                        <a href="comment_product.php?id=<?php echo $product->id; ?>">
                                            
                                        <?php 

                                       /* $comments = Comment::find_the_comments($product->id);


                                        echo count($comments);

*/
                                        ?>

                                        </a>
-->



                                    </td>
                                       
                                    </tr>


                                <?php endforeach; ?>


                                    
                                    
                                </tbody>
                            </table> <!--End of Table-->
                        

                        </div>










                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>