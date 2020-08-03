<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

class HouseBlend extends Beverage
{
    protected $description = 'House blend coffe';

    public function cost()
    {
        return 0.89;
    }
}