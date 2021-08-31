<?php

namespace Src\Interfaces;

interface IMethodHolder
{
    public function getInfo($info);
    public function sendInfo($info);
    public function calculate($first,$second);
}