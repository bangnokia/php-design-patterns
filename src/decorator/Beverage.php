<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

abstract class Beverage
{
    protected $description = 'Unknow beverage';

    abstract function cost();
}
