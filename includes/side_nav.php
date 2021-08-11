  <?php 

if(empty($_GET['category_id'])) {

$products = Product::find_all();
$categories = Category::find_all();

/*
$products = Product::find_by_category($_GET['category_id']);
*/


}
?>
               
               <div class="col-md-3">
                <!--<p class="lead text-center">العطار ستور</p>-->
                <a href="index.php"><img class="logo" src="admin/images/20210531_200424_0000.png" width="150px" height="150px"></a>  

                <div class="list-group">
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
                        <a class="text-center" href="index.php?category_id=<?php echo $category->id; ?>"><?php echo $category->name; ?></a>
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
                    </div>
                  
                </div>
            </div>