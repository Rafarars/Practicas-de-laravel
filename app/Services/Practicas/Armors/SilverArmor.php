<?php

namespace App\Services\Practicas\Armors;

use App\Services\Practicas\Armor;
use App\Services\Practicas\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 3;
    }
}
