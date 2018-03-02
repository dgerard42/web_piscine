<?php
class NightsWatch implements IFighter {
	public $brothers = array ();
	public function recruit($person){
		$this->brothers[] = $person;
	}
	public function fight(){
		foreach ($this->brothers as $brother){
			if ($brother instanceof IFighter){
				$brother->fight();
			}
		}
	}
}
?>
