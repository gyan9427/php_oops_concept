<?php

include "../vendor/autoload.php";

use Src\clients\Client;
use Src\classes\ImplementAlpha;
use Src\classes\ConSql;
use Src\classes\UseProducts;
use Src\classes\Abstracts\NorthRegion;

$c = new Client();

$ia = new ImplementAlpha();

var_dump($ia->calculate(23,3));

$cs = new ConSql();

$cs->testConnection();

$pro = new UseProducts();

$nr = new NorthRegion();

echo $nr->displayShow();


