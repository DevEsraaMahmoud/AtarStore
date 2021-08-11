         <?php $photos = Photo::find_all(); ?>

                       <div class="row carousel-holder">

                    <div class="col-md-12">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active">  </li>
                            </ol>
                            <div class="carousel-inner">

                                <div class="item active">
                                    <img class="slide-image" src="admin/images/ac.jpg"  width="400px" height="150px" alt="">

                                </div> 
                                  <?php foreach($photos as $photo): ?>
                                   <div class="item" >
                                    <img class="slide-image" src="admin/<?php echo $photo->picture_path(); ?>"  width="200px" height="100px" alt="">
                                </div>
                                 <?php endforeach; ?>


                              
                            </div>

                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>

                    </div>


                </div>