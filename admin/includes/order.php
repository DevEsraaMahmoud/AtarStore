 <?php 



class Order extends Db_object {
    
    
	protected static $db_table = "orders";
	protected static $db_table_fields = array('id', 'order_amount', 'order_transaction', 'order_status', 'order_currency', 'quantity');
	public $id;
	public $order_amount;
	public $quantity;
	public $order_transaction;
	public $order_status;
	public $order_currency;
	
    
   
    
}




 ?>