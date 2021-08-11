<?php include("includes/header.php"); ?>

<?php 

if(!empty($_GET['category_id'])) {

$products = Product::find_all();
$products = Product::find_by_category($_GET['category_id']);
$categories = Category::find_all();

/*
$products = Product::find_by_category($_GET['category_id']);
*/


}



?>

<?php 


$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;


$items_per_page = 16;


$items_total_count = Photo::count_all();



$paginate = new Paginate($page, $items_per_page, $items_total_count);


$sql = "SELECT * FROM photos ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= "OFFSET {$paginate->offset()}";
$photos = Photo::find_by_query($sql);



// $photos = Photo::find_all();


 ?>



     </div>


     <div class="row">


        <ul class="pager">

            <?php 


            if($paginate->page_total() > 1) {

                if($paginate->has_next()) {

echo "<li class='next'><a href='index.php?page={$paginate->next()}'>Next</a></li>";


                }




                for ($i=1; $i <= $paginate->page_total(); $i++) { 


                    if($i == $paginate->current_page) {


        echo  "<li class='active'><a href='index.php?page={$i}'>{$i}</a></li>";



                    } else {

        echo  "<li><a href='index.php?page={$i}'>{$i}</a></li>";


                    }
                  
                }

         


               




        







                  if($paginate->has_previous()) {

echo "<li class='previous'><a href='index.php?page={$paginate->previous()}'>Previous</a></li>";


                }




            }


             ?>


        </ul>
         






     </div>








               
     

 </div>




            <!-- Blog Sidebar Widgets Column -->
          <!--   <div class="col-md-4">
 -->
            
                 <?php // include("includes/sidebar.php"); ?>



</div> 
        <div class="container">
        <div class="pull-right">
            <a class="btn btn-primary btn-lg btn-floating social"
  style="background-color: #E1306C; margin-bottom :15px; border-style:none;"
  href="#!"
  role="button"
  ><i class="fa fa-instagram"></i></a><a
  class="btn btn-primary btn-lg btn-floating social"
  style="background-color: #3b5998; margin-bottom:15px;border-style:none;"
  href="https://www.facebook.com/Al3tar.eg"
  role="button"
  ><i class="fa fa-facebook"></i
></a><a
  class="btn btn-primary btn-lg btn-floating social"
  style="background-color: #2867B2; margin-bottom:15px;border-style:none;"
  href="#!"
  role="button"
  ><i class="fa fa-linkedin"></i
></a><a
  class="btn btn-primary btn-lg btn-floating social"
  style="background-color: #25D366; margin-bottom:15px;border-style:none;"
  href="https://api.whatsapp.com/send?phone=201060041569&app=facebook&entry_point=page_cta"
  role="button"
  ><i class="fa fa-whatsapp"></i
></a>
        </div>

        <div class="row">

          <?php include("includes/side_nav.php"); ?>


            <div class="col-md-9">

              <?php include("includes/slider.php"); ?>
    
                     

               <?php /*echo $_SESSION['product_13'];*/ ?>

                <div class="row">
                
                
                

     <?php  foreach ($products as $product):  ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
               <div class="product-image"> 
						<img class="home_page_photo img-responsive " src="admin/<?php echo $product->image_path_and_placeholder(); ?>" alt="" />
						<span class="tag2 hot">
							<?php echo $product->product_price; ?> L.E
						</span> 
					</div>
                           
                            <div class="caption">
                               
                                <h4 class="text-center"><a href="item.php?id=<?php echo $product->id; ?>"> <?=$product->product_name; ?></a>
                                </h4>
                                   <div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 cart"> 
							<a href="cart.php?add=<?php echo $product->id; ?>" class="btn btn-primary">Add to cart</a>
						</div>
    						</div>
                                <p class="text-center disc">   <?=$product->description; ?></p>
                                
                            </div>
                           
                           
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                            
                            
                            
                        </div>
                      
                        
                        
                        
                    </div>
                     <?php endforeach; ?>

               

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    
        <!-- /.row -->

        <?php include("includes/footer.php"); ?>
