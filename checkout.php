<!DOCTYPE html>
<?php include("includes/header.php"); ?>
<?php include("cart.php"); ?>

<?php 
$order = new Order();

if(isset($_POST['submit'])) {


if($order) {


$order->order_amount = $_SESSION['item_total'];
$order->quantity = $_SESSION['item_quantity'];
$order->save();
    
    
/*
$total_amount =   $_SESSION['item_total'];
$total_amount =   $_SESSION['item_total'];
$total_amount =   $_SESSION['item_total'];
$order->first_name =$_POST['first_name'];
$order->last_name =$_POST['last_name'];
$order->password =$_POST['password'];
$order->group_id = $_POST['group_id'] = '0' ;


$order->set_file($_FILES['order_image']);
$order->upload_photo();
$session->message("The order {$order->ordername} has been added");
$order->save();
redirect("orders.php");
*/


}

}

?>


 
    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">

      <h1>Checkout</h1>

      
<form action="" method="post">
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="business" value="test@esraa.com">
  <input type="hidden" name="currency_code" value="US">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
          <?php $total =0;
            $item_quantity = 0;
            $item_name = 1;
            $item_number = 1;
            $amount = 1;
            $quantity = 1;
            foreach($_SESSION as $name => $value):?>
          <?php if(substr($name, 0, 8) == 'product_'){
               $length = strlen($name - 8);
                $id = substr($name, 8 , $length);
    
            $products = Product::find_by_id($id);
    ?>
            <tr>
            <td><?php echo $products->product_name; ?>
              <td><?php echo $products->product_price . ' L.E'; ?>
              <td><?php echo $value ?>
              <td><?php $sub = $products->product_price *$value; echo $sub. ' L.E';   $item_quantity +=$value;
               $_SESSION['item_total'] = $total +=$sub;
             $_SESSION['item_quantity'] = $item_quantity;?>
           <td><a class="btn btn-warning" href="cart.php?remove=<?php echo $products->id; ?>"><span class="glyphicon glyphicon-minus"></span></a>   
          <a class="btn btn-success" href="cart.php?add=<?php echo $products->id; ?>"><span class="glyphicon glyphicon-plus"></span></a>  
         <a class="btn btn-danger" href="cart.php?delete=<?php echo $products->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
              
            </tr>
            <input type="hidden" name="item_name_<?php echo $item_name; ?>" value="<?php echo $products->product_name; ?>">
          <input type="hidden" name="item_number_<?php echo $item_number; ?>" value="<?php echo $products->id; ?>">
          <input type="hidden" name="quantity_<?php echo $quantity; ?>" value="<?php echo $item_quantity; ?>">
        <input type="hidden" name="amount_<?php echo $amount; ?>" value="<?php echo $products->product_price; ?>">
            <?php
            $item_name ++;
            $item_number++;
            $amount++;
            $quantity++;
          } ?>
            
            
            <?php endforeach; ?>
            
        </tbody>
    </table>
     <input type="submit" name="submit" value="Buy Now" class="btn btn-success"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
  >
</form>



<!--  ***********CART TOTALS*************-->
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php  echo isset($_SESSION['item_quantity'] ) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount"><?php  echo isset($_SESSION['item_total'] ) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?> L.E</span></strong> </td>
</tr>



</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


</div>

       <?php include("includes/footer.php"); ?>
