<?php

include "../vendor/autoload.php";

use Src\clients\Client;
use Src\classes\ImplementAlpha;

$c = new Client();

$ia = new ImplementAlpha();

var_dump($ia->calculate(23,3));

