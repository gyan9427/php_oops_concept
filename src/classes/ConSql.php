<?php
namespace Src\classes;
use Src\Interfaces\IConnectInfo;

class ConSQL implements IConnectInfo
{
    //Passing values using scope resolution operator
    private $server = IConnectInfo::HOST;
    private $currentDB = IConnectInfo::DBNAME;
    private $user = IConnectInfo::UNAME;
    private $pass = IConnectInfo::PW;

    public function testConnection()
    {
        echo $this->server;
        echo $this->currentDB;
        echo $this->user;
        echo $this->pass;
    }
}

