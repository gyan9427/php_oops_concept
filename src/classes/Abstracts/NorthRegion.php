<?php

namespace Src\classes\Abstracts;

use Src\classes\Abstracts\IAbstract;

class NorthRegion extends IAbstract
{
    //Must return decimal value

    protected function giveCost()
    {
        return 210.54;
    }

    //Must return a string value

    protected function giveCity ()
    {
        return "Moose Breath";
    }
}