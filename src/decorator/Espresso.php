<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

class Espresso extends Beverage
{
    protected string $description = 'Espresso';

    public function cost()
    {
        return 1.99;
    }
}