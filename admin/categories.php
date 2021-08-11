<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 

$categories = Category::find_all();

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
                        </h1>
                          <p class="bg-success">
                        </p>

                        <a href="add_category.php" class="btn btn-primary">Add Category</a>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($categories as $category): ?>

                                    <tr>


                                        <td><?php echo $category->id; ?>
                                        <td><?php echo $category->name; ?>
                                        	  <div class="action_links">

                                                <a href="delete_category.php?id=<?php echo $category->id; ?>">Delete</a>
                                                <a href="edit_category.php?id=<?php echo $category->id; ?>">Edit</a>
                    
                                                
                                            </div>
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