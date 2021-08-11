<?php include("includes/header.php"); ?>
<?php 
if(empty($_GET['category_id'])) {

$products = Product::find_all();
$categories = Category::find_all();

/*
$products = Product::find_by_category($_GET['category_id']);
*/


}
?>


<div class="container bootdey">
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <input type="text" placeholder="Keyword Search" class="form-control" />
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading text-center">
                الاصناف
            </header>
            <div class="panel-body">
                    <?php foreach($categories as $category): ?>
                <ul class="nav prod-cat">

                   
                    <li>

                        <a class="text-center" href="products1.php?category_id=<?php echo $category->id; ?>"> <?php echo $category->name; ?></a>
                    </li>

                </ul>
                                <?php endforeach; ?>
               

                    <!--<li>
                        <a href="#" class="active"><i class="fa fa-angle-right"></i> Dress</a>
                        <ul class="nav">
                            <li class="active"><a href="#">- Shirt</a></li>
                            <li><a href="#">- Pant</a></li>
                            <li><a href="#">- Shoes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Bags &amp; Purses</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Beauty</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Coat &amp; Jacket</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Jeans</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Jewellery</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Electronics</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Sports</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Technology</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Watches</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Accessories</a>
                    </li>-->
            </div>
        </section>
        <!--<section class="panel">
           
        </section>-->
        <section class="panel">
                        <?php include("includes/slider.php"); ?>

        </section>
       <!-- <section class="panel">
            <header class="panel-heading">
                Best Seller
            </header>
            <div class="panel-body">
                <div class="best-seller">
                    <article class="media">
                        <a class="pull-left thumb p-thumb">
                            <img src="https://via.placeholder.com/250x220/FFB6C1/000000" />
                        </a>
                        <div class="media-body">
                            <a href="#" class="p-head">Item One Tittle</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media">
                        <a class="pull-left thumb p-thumb">
                            <img src="https://via.placeholder.com/250x220/A2BE2/000000" />
                        </a>
                        <div class="media-body">
                            <a href="#" class="p-head">Item Two Tittle</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media">
                        <a class="pull-left thumb p-thumb">
                            <img src="https://via.placeholder.com/250x220/6495ED/000000" />
                        </a>
                        <div class="media-body">
                            <a href="#" class="p-head">Item Three Tittle</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>-->
    </div>
    <div class="col-md-9">
        <section class="panel">
            <div class="panel-body">
                <div class="pull-right">
                    <ul class="pagination pagination-sm pro-page-list">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </section>

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
							<a href="cart.php?add=<?php echo $product->id; ?>" class="btn btn-success">Add to cart</a>
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
        <?php include("includes/footer.php"); ?>

