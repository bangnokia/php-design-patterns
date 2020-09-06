<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

class StarbuzzCoffee
{
    public function __construct()
    {
        $beverage = new Espresso();
        echo $beverage->getDescription().' $'.$beverage->cost().PHP_EOL;

        $beverage2 = new HouseBlend();
        $beverage2 =new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);

        echo $beverage2->getDescription().' $' . $beverage2->cost().PHP_EOL;
    }
}