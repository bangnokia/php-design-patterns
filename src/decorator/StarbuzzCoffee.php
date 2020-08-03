<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

class StarbuzzCoffee
{
    public function __construct()
    {
        $beverage = new Espresso();
        echo $beverage->getDescription().' $'.$beverage->cost().PHP_EOL;
    }
}