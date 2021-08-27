<?php

namespace Src\clients;
use Src\utilities\MobileSniffer;

class Client{

    private $mobSniff;

    public function __construct()
    {
        $this->mobSniff = new MobileSniffer();
        echo "Device = ". $this->mobSniff->findDevice()."</br>";
        echo "Browser = ". $this->mobSniff->findBrowser()."</br>";
    }

}