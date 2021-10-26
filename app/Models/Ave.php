<?php

namespace App\Models;

use App\Models\Animal\Animal;

class Ave extends Animal
{
    public function locomover()
    {
        echo "Aves voam";
    }
}