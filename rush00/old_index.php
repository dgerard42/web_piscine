<?php
	include('logon.php');
	if ($_SESSION['access'] == "basic") {
		include('cart.php');
	}
?>
