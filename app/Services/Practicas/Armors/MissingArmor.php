<?php

namespace App\Services\Practicas\Armors;

use App\Services\Practicas\Armor;
use App\Services\Practicas\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}