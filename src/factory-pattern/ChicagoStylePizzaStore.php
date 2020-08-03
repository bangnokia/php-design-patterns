<?php

require('SimplePizzaStore.php');

class ChicagoStylePizzaStore extends SimplePizzaStore {

	public function createPizza($type) {
		$pizza = null;

		if ($type == 'chese') {
			$pizza = new ChicagoStyleCheesePizza();
		} else if ($type == 'pepperoni') {
			$pizza = new ChicagoStylePepperoniPizza();
		} else if ($type == 'clam') {
			$pizza = new ChicagoStyleClamPizza();
		} else if ($type == 'veggie') {
			$pizza = new ChicagoStyleVeggiePizza();
		}

		return $pizza;
	}
}