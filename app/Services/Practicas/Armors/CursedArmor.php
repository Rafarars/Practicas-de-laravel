<?php

namespace App\Services\Practicas\Armors;

use App\Services\Practicas\Armor;
use App\Services\Practicas\Attack;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $Attack)
    {
        return $attack->getDamage() * 2;
    }
}
