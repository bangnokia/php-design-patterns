<?php

namespace BangNokia\PhpDesignPatterns\Decorator;

abstract class Beverage
{
    protected string $description = 'Unknown beverage';

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    abstract function cost();   
}
