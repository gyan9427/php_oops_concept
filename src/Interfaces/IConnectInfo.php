<?php
namespace Src\Interfaces;

interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "phpWorker";
    const DBNAME = "dbPatt";
    const PW = "easyWay";
    function testConnection();
}