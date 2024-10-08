<?php

namespace App\Services\Practicas\Armors;

use App\Services\Practicas\Armor;
use App\Services\Practicas\Attack;

class BronzeArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}
