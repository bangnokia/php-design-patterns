<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

abstract class CondimentDecorator extends Beverage
{
    abstract public function getDescription();
}