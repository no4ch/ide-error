<?php

namespace App\Factory;

use App\BMW;

class CachedCarFactory
{
    /** @var CarFactory */
    private $carFactory;

    public function __construct()
    {
        $this->carFactory = new CarFactory();
    }

    public function create(): BMW
    {
        return $this->carFactory->create();
    }
}