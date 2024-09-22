<?php

namespace App\Services\Practicas\Armors;

use App\Services\Practicas\Armor;

class SilverArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}
