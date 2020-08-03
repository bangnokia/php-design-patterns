<?php

abstract class PizzaStore {

    public function orderPizza($type) {
     	$pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    protected abstract function createPizza($type);
}