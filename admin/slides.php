<?php include("includes/header.php"); ?>


 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->



        <?php include("includes/top_nav.php") ?>





            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           

    
        <?php include("includes/side_nav.php"); ?>




            <!-- /.navbar-collapse -->
        </nav>
  <div class="row">

    <h3 class="bg-success"></h3>

 <div class="col-xs-3">

 <form action="" method="post" enctype="multipart/form-data">
  
<div class="form-group">

<input type="file" name="file">

</div>

<div class="form-group">
<label for="title">Slide Title</label>
<input type="text" name="banner_title" class="form-control">

</div>

<div class="form-group">

<input type="submit" name="add_banner">

</div>

 </form>

 </div>


 <div class="col-xs-8">
   



 </div>

</div><!-- ROW-->

<hr>

<h1>Slides Available</h1>

<div class="row">
  




</div>

  <?php include("includes/footer.php"); ?>
