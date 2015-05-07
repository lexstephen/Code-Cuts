<?php 

	session_start();

	Class Store {
		private $name;		// Store's name
		private $products;	
		private $pid;
		
		public function __construct($name) {
			$this->name = $name;
			$this->products = array();
			$this->pid = 1;				// next available index in products array
		}
		
		public function getName() { return $this->name; }
		
		public function addProduct($prod) {
			// add a product object into the products array
			$this->products[$this->pid] = $prod;
			$this->pid ++;
		}
		
		public function addNewProduct($name, $price, $desc, $qty) {
			$prod = new Product($name, $price, $desc,$qty);
			$this->addProduct($prod);
		}
		
		public function getProductById($id) {
			if(array_key_exists($id, $this->products)) 
				return $this->products[$id];
			else
				return false;
		}
		
		public function getProductTable() {
			$table = '<table>';
			$table .= '<tr><td>ID</td> <td>Name</td> <td>Price</td> <td>Qty</td> <td>Description</td></tr>';
			foreach ($this->products as $id => $prod) {
				$table .= '<tr><td>'. $id . '</td>' 
							. '<td>'. $prod->getName() . '</td>' 
							. '<td>'. $prod->getPrice() . '</td>' 
							. '<td>'. $prod->getDesc() . '</td>'
							. '<td>'. $prod->getQty() . '</td></tr>';
			}
			$table .= '</table>';
			return $table;
		}
	} // end Store

	Class Product {
		private $name;
		private $price;
		private $description;
		private $qty;
		
		public function __construct($name,$price,$desc,$qty) {
			$this->name = $name;
			$this->price = $price;
			$this->description = $desc;
			$this->qty = $qty;
		}
		
		public function getName() 	{ return $this->name; }
		public function getPrice() 	{ return $this->price; }
		public function getDesc() 	{ return $this->description; }
		public function getQty() 	{ return $this->qty; }
		public function setQty($q) 	{ $this->qty = $q; }
	} // end Product
	
	// no session exists so 
	if(!isset($_SESSION['store'])) {
		$store = new Store('Phone Store');
		
		// add item in two step process
		$p1 = new Product('iPhone 4S', 25, 1, 'Ancient artifact');
		$store->addProduct($p1);
		
		// add item in single step
		$store->addNewProduct('iPhone 6', 899, 1, 'Hot new thing');
		$_SESSION['store'] = $store;
		
	} // oh there is a session
	else if(isset($_POST['name'])) {
		$_SESSION['store']->addNewProduct($_POST['name'], $_POST['price'], $_POST['qty'], $_POST['desc']);
	}
	
	// make a class called ShoppingCart with a CalculatePrice method
	
	Class ShoppingCart {
		
		public function calculatePrice() {
			
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Week 7 Lab: Store</title>
</head>
<style>
	body 					{background-color: #fff; 
								color: #000; 
								text-align: left; 
								font-family: Verdana, sans-serif; 
								font-size: 10pt;}
	label 					{clear: both; 
								font-weight: bold; 
								display: block; 
								width: 300px; 
								float: left;}
	label:after 				{content: ": " }
	input[type="text"]			{font-size: 12pt; 
								width: 200px; 
								padding: 2px;}
	input[type="submit"] 	{margin-top: 20px;}
	.wk5					{color: #F62817; }
	table td 				{border: 1px #000 solid;}
	table	 				{border-collapse: collapse; padding: 2px;}
	label					{display: inline; width: 100px;}
</style>
<body>

<h1><?php echo $_SESSION['store']->getName(); ?></h1>

<?php echo '<p>'.$_SESSION['store']->getProductTable().'</p>'; ?>

<form method="post">
	<label>Name</label> <input type="text" name="name"><br>
	<label>Price</label> <input type="text" name="price"><br>
	<label>Qty</label> <input type="text" name="qty"><br>
	<label>Description</label> <textarea name="desc"></textarea>
	
	<input type="submit">
</form>

</body>
</html>