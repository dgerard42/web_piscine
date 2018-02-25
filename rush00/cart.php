<?php

function cart_init(){
	$product_array = array(
		'thyroid_gland' => array(
			'code' => 'vbV34895u',
			'display_name' => 'Thyroid Gland',
			'price' => '1 BTC'
		),

		'adrenal_gland' => array(
			'code' => 'BD67670rg',
			'display_name' => 'Adrenal Gland',
			'price' => '1 BTC'
		),

		'left_kidney' => array(
			'code' => 'vn$cm#31o',
			'display_name' => 'Left Kidney',
			'price' => '2 BTC'
		)
	);

	if (!empty($product_array)) {
		foreach($product_array as $key=>$value){
			?>
				<div class="product">
					<div><?php echo $product_array[$key]['display_name']; ?></div>
					<div><?php echo $product_array[$key]['code']; ?></div>
					<div><?php echo $product_array[$key]['price']; ?></div>
				</div>
			<?php }}
}

function cart_action(){
	switch ($_GET["action"]){
		case "add" :
			$_SESSION["cart"][0] = $product_array[$_GET['key']];
		case "remove" :
		case "empty" :
	}
}

?>
