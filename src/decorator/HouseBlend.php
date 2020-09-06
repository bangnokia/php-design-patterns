<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

class HouseBlend extends Beverage
{
    protected string $description = 'House blend coffee';

    public function cost()
    {
        return 0.89;
    }
}