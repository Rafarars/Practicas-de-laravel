<?php

namespace App\Services\Practicas\Armors;

use App\Services\Practicas\Armor;

class CursedArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}
