<?php

namespace Src\classes;

use Src\Interfaces\IProduct;
use Src\classes\FruitStore;
use Src\classes\CitrusStore;


class UseProducts 
{
    public function __construct()
    {
        $appleSauce = new FruitStore();
        // var_dump($appleSauce);
        $orangeJuice = new CitrusStore();
        
        $this->doInterface($appleSauce);
        $this->doInterface($orangeJuice);
    }

    //Iproduct is type hint in doInterface()

    public function doInterface (IProduct $product)
    {
        echo $product->apples();
        echo $product->oranges();
    }
}