<?php
include('db_manage.php');

$db_0 = new db_manage();
$db_0->db_init();

if ($_GET['action'] == true && $_GET['id']) {
	$all_products = $db_0->run_query("SELECT * FROM items ORDER BY id ASC");
	foreach ($all_products as $key => $value){
		if ($all_products[$key]['id'] == $_GET['id']) {
			$product_key = $key;
		}
	}
	$item_to_add = $all_products[$product_key];
	if ($_GET['action'] == "add") {
		if ($_POST['quantity'] != 0) {
			if ($_SESSION['cart'] != "") {
				foreach ($_SESSION['cart'] as $key => $value){
					
				}
			} else {
				$_SESSION['cart'] = $item_to_add;
			}
		}
} else if ($GET['action'] == "remove"){

}

if ($_SESSION['cart'] != "") {
	foreach ($_SESSION['cart'] as $key => $value){
		?>
		<form method="get" action="cart.php?action=add&id=<?php echo $product_array[$key]['id']; ?>">
			<tr>
				<td><?php echo $_SESSION['cart'][$key]['name']; ?></td>
				<td><?php echo $_SESSION['cart'][$key]['des']; ?></td>
				<td><?php echo $_SESSION['cart'][$key]['id']; ?></td>
				<td><?php echo $_SESSION['cart'][$key]['price'] . "BTC" ; ?></td>
				<td><input type="remove" name="remove item" value="OK">/td>
			</tr>
		</form>
		<?php
			$item_total += ($_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['quantity']);
	}
	echo $item_total . "BTC";
}

$product_array = $db_0->run_query("SELECT * FROM items ORDER BY id ASC");
if ($product_array != "") {
	foreach($product_array as $key => $value){
		?>
			<div class="product">
				<form method="get" action="cart.php?action=add&id=<?php echo $product_array[$key]['id']; ?>">
					<div><?php echo $product_array[$key]['name']; ?></div>
					<div><?php echo $product_array[$key]['price']; ?> BTC</div>
					<div><?php echo $product_array[$key]['id']; ?></div>
					<input type="submit" name="add to cart" value="OK">
				</form>
			</div>
		<?php
	}
}

?>

// if ($_SESSION['cart'] != "") {
// 	foreach ($_SESSION['cart'] as $key => $value){
// 		?>
// 			<tr>
// 			<td><?php echo $_SESSION['cart'][$key]['name']; ?></td>
// 			<td><?php echo $_SESSION['cart'][$key]['des']; ?></td>
// 			<td><?php echo $_SESSION['cart'][$key]['id']; ?></td>
// 			<td><?php echo $_SESSION['cart'][$key]['price'] . "BTC" ; ?></td>
// 			<td><a href="cart.php?action=remove&code=<?php echo $item['code']; ?>" class="btnRemoveAction">Remove Item</a></td>
// 			</tr>
// 		<?php
// 			$item_total += ($_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['quantity']);
// 	}
// 	echo $item_total . "BTC";
// }
//
// $product_array = $db_0->run_query("SELECT * FROM items ORDER BY id ASC");
// if ($product_array != "") {
// 	foreach($product_array as $key => $value){
// 		?>
// 			<div class="product">
// 				<form method="post" action="cart.php?action=add&id=<?php echo $product_array[$key]['id']; ?>">
// 					<div><?php echo $product_array[$key]['name']; ?></div>
// 					<div><?php echo $product_array[$key]['price']; ?> BTC</div>
// 					<div><?php echo $product_array[$key]['id']; ?></div>
// 					<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="add to cart" class="btnAddAction" /></div>
// 				</form>
// 			</div>
// 		<?php
// 	}
// }
//
// ?>
