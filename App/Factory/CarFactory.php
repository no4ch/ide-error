<?php

namespace App\Factory;

use App\BMW;
use App\CarInterface;

class CarFactory
{
    public function create(): CarInterface
    {
        return new BMW();
    }
}