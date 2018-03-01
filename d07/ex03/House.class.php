<?php

class House {
	public function __construct() {}
	public function introduce() {
		print("House " . $this->getHouseName() . " of " . $this->getHouseSeat() . " : \"" . $this->getHouseMotto() . "\"" . PHP_EOL);
	}
}


?>
