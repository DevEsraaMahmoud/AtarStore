 <?php 




class Product extends Db_object {

	protected static $db_table = "products";
	protected static $db_table_fields = array('id', 'product_name','product_price', 'product_image','description', 'category_id', 'product_quantity' );
	public $id;
	public $product_name;
	public $product_price;
	public $product_quantity;
	public $product_image;
	public $description;
	public $category_id;
	public $filename;
    public $tmp_path;
    
	public $upload_directory = "images";
	public $image_placeholder = "https://via.placeholder.com/150&text=image";

    public $errors = array();
	public $upload_errors_array = array(


	UPLOAD_ERR_OK           => "There is no error",
	UPLOAD_ERR_INI_SIZE		=> "The uploaded file exceeds the upload_max_filesize directive in php.ini",
	UPLOAD_ERR_FORM_SIZE    => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
	UPLOAD_ERR_PARTIAL      => "The uploaded file was only partially uploaded.",
	UPLOAD_ERR_NO_FILE      => "No file was uploaded.",               
	UPLOAD_ERR_NO_TMP_DIR   => "Missing a temporary folder.",
	UPLOAD_ERR_CANT_WRITE   => "Failed to write file to disk.",
	UPLOAD_ERR_EXTENSION    => "A PHP extension stopped the file upload."					
        );
    
    






	public function upload_photo() {

		if($this->id) {

			$this->update();
			
		} else {

			if(!empty($this->errors)) {

				return false;

			}

			if(empty($this->filename) || empty($this->tmp_path)){
				$this->errors[] = "the file was not available";
				return false;
			}

			$target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->filename;


			if(file_exists($target_path)) {
				$this->errors[] = "The file {$this->filename} already exists";
				return false;



			}

			if(move_uploaded_file($this->tmp_path, $target_path)) {

				if($this->create()) {

					unset($this->tmp_path);
					return true;

				}



			} else {

				$this->errors[] = "the file directory probably does not have permission";
				return false;

			}


	   	}
 


	}
    public function set_file($file) { 

		if(empty($file) || !$file || !is_array($file)) {
		$this->errors[] = "There was no file uploaded here";
		return false;

		}elseif($file['error'] !=0) {

		$this->errors[] = $this->upload_errors_array[$file['error']];
		return false;

		} else {

    	$this->filename =  basename($file['name']);
		/*$this->user_image =  basename($file['name']);*/
		$this->tmp_path = $file['tmp_name'];
		$this->type     = $file['type'];
		$this->size     = $file['size'];
             $this->product_name     = $_POST['product_name'];
        $this->product_image     = basename($file['name']);
        $this->product_price     = $_POST['product_price'];
        $this->description     = $_POST['description'];
        $this->category     = $_POST['category'];


		}



}

public function image_path_and_placeholder() {

		return empty($this->product_image) ? $this->image_placeholder : $this->upload_directory.DS.$this->product_image;

	}
    
    public function ajax_save_user_image($user_image, $user_id) {


		global $database;

		$product_image = $database->escape_string($product_image);
		$id = $database->escape_string($id);

		$this->product_image = $product_image;
		$this->id = $id;

		$sql  = "UPDATE " . self::$db_table . " SET product_image = '{$this->product_image}' ";
		$sql .= " WHERE id = {$this->id} ";
		$update_image = $database->query($sql);

		
		echo $this->image_path_and_placeholder();



	


	}


	public function delete_photo() {


		if($this->delete()) {

			$target_path = SITE_ROOT.DS. 'admin' . DS . $this->picture_path();

			return unlink($target_path) ? true : false;


		} else {

			return false;


		}




	}
    
    public static function find_by_category($category_id){
       		return self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE category_id = $category_id ");

    }
    
   public static function show_product_category_title($category_id){

		global $database;

find_by_query ("SELECT * FROM categories WHERE id = '{$category_id}' ");

   }
    



}


 




 ?>


















