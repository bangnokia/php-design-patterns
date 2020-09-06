<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

class Mocha extends CondimentDecorator
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Mocha';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.20;
    }
}