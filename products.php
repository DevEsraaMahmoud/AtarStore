<?php include("includes/header.php"); ?>
<?php

$products = Product::find_all();

?>
	            <?php  foreach ($products as $product):  ?>

<div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
	<!-- product -->

	<div class="product-content product-wrap clearfix">
		<div class="row">
           
				<div class="col-md-5 col-sm-12 col-xs-12">
				 
					<div class="product-image"> 
						<img class="home_page_photo img-responsive " src="admin/<?php echo $product->image_path_and_placeholder(); ?>" alt="" />
						<span class="tag2 hot">
							<?php echo $product->product_price; ?>
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							  <a href="#" class="pro-title">
                        <?=    $product->product_name; ?>
                        
                            <span> <?= $product->category_id; ?></span>
							</a>
						</h5>
						<p class="price-container">
							<span><?php echo $product->product_price; ?></span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p><?=    $product->description; ?> </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6"> 
							<a href="javascript:void(0);" class="btn btn-success">Add to cart</a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="rating">
								<label for="stars-rating-5"><i class="fa fa-star"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end product -->
</div>
	         <?php endforeach; ?>
	         
	         
	         

