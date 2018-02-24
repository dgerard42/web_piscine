<?php
	$action = $_GET["action"];
	$name = $_GET["name"];

	if ($action != null) {
		if ("set" == $action) {
			$value = $_GET["value"];
			setcookie($name, $value, time() + (86400 * 30));
		} else if ("get" == $action) {
			echo $_COOKIE[$name] . "\n";
		} else if ("del" == $action) {
			setcookie($name, $value, time() - 42);
		} else {
			echo "error\n";
		}
	}
?>
