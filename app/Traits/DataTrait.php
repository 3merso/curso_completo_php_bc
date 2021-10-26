<?php

namespace App\Traits;

trait DataTrait
{
    public static function getDateTimeNow()
    {
        return date("d/m/Y h:i:s");
    }
}
