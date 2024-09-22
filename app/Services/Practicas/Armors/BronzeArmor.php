<?php

namespace App\Services\Practicas\Armors;

use App\Services\Practicas\Armor;

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}
