<?php

namespace App\Config;

class Database
{
    public static $driver = 'MySql';

    public static function staticEcho()
    {
        echo "hello static world!";
    }
}