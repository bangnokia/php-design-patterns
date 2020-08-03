<?php

require('SimplePizzaStore.php');

class NYStylePizzaStore extends SimplePizzaStore {

	public function createPizza($type) {
		$pizza = null;

		if ($type == 'chese') {
			$pizza = new NYStyleCheesePizza();
		} else if ($type == 'pepperoni') {
			$pizza = new NYStylePepperoniPizza();
		} else if ($type == 'clam') {
			$pizza = new NYStyleClamPizza();
		} else if ($type == 'veggie') {
			$pizza = new NYStyleVeggiePizza();
		}

		return $pizza;
	}
}