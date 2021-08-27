<?php

include "../vendor/autoload.php";

use Src\utilities\MobileSniffer;

$ms = new MobileSniffer();

var_dump($ms->findBrowser());