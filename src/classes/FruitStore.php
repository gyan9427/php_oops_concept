<?php

namespace Src\classes;

use Src\Interfaces\IProduct;

class FruitStore implements IProduct
{
    public function apples()
    {
        return "FruitStore sez--We have apples.<br/>";
    }

    public function oranges()
    {
        return "FruitStore sez--We hanve no citrus fruit.";
    }

}