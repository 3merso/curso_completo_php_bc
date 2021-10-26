<?php

namespace App\Models;

use App\Models\Animal\Animal;

class Mamifero extends Animal
{
    public function locomover()
    {
        echo "Mamíferos correm";
    }
}