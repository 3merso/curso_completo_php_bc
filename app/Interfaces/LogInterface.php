<?php

namespace App\Interfaces;

interface LogInterface
{
    static public function getInstance();

    public function writeToFile($message);

    static public function log($message, $level);
}