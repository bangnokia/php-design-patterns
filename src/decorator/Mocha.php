<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

class Mocha extends CondimentDecorator
{
    protected $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription().', Mocha';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.20;
    }
}