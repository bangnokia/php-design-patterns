<?php

abstract class Beverage
{
	protected $description = 'Unknow beverage';
	public function getDescription()
	{
		return $this->description;
	}
	abstract function cost();
}

abstract class CondimentDecorator extends Beverage
{
	abstract function getDescription();
}

class Expresso extends Beverage
{
	protected $description = 'Expresso';
	public function cost()
	{
		return 1.99;
	}
}

class HouseBlend extends Beverage
{
	protected $description = 'House blend coffe';
	public function cost()
	{
		return 0.89;
	}
}

class Mocha extends CondimentDecorator
{
	protected $beverage;
	public function __construct($beverage)
	{
		$this->beverage = $beverage;	
	}
	public function getDescription()
	{
		return $this->beverage->getDescription() . ', Mocha';	
	}
	public function cost()
	{
		return $this->beverage->cost() + 0.20;
	}
}

class StarbuzzCoffee
{
	public function __construct()
	{
		$beverage = new Expresso();
		echo $beverage->getDescription() . ' $' . $beverage->cost() . PHP_EOL;
	}
}
