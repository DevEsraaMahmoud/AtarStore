<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 

$orders = Order::find_all();

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


                


        <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   All Orders

</h1>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>Order ID</th>
           <th>Title</th>
           
<!--
           <th>Photo</th>
-->
           <th>total amount</th>
           <th>total Quantity</th>
           <th>Invoice Number</th>
           <th>Order Date</th>
           <th>Status</th>
      </tr>
    </thead>
    <tbody>
                                       <?php foreach($orders as $order): ?>

        <tr>
            <td><?= $order->id; ?></td>
            <td>Order Num . <?= $order->id; ?></td>

<!--
            <td><img src="http://placehold.it/62x62" alt=""></td>
-->
            <td><?= $order->order_amount; ?> L.E</td>
            <td><?= $order->quantity; ?> Items </td>
            <td>456464</td>
            <td>Jun 2039</td>
           <td>Completed</td>
        </tr>
                                        <?php endforeach; ?>


    </tbody>
</table>
</div>











            </div>
            <!-- /.container-fluid -->

      

    </div>

</div>