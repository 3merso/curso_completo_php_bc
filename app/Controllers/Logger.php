<?php

namespace App\Controllers;

use App\Interfaces\LogInterface;
use App\Traits\DataTrait;

class Logger implements LogInterface
{
    use DataTrait;

    const INFO = 'info';
    const ERROR = 'error';

    private static $instance;
    private $config = [];

    public function __construct()
    {
        $this->config = require_once __DIR__ . '/../Config/Log.php';
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function writeToFile($message)
    {
        file_put_contents($this->config['log_file'], "$message\n", FILE_APPEND);
    }

    public static function log($message, $level = Logger::INFO)
    {
        // $date = date('Y-m-d h:i:s');
        $date = self::getDateTimeNow();
        $severity = "[$level]";
        $message = "$date $severity :: $message";
        self::getInstance()->writeToFile($message);
    }
}