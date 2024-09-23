<?php

namespace App\Http\Controllers;

use App\Services\Practicas\Armors\SilverArmor;
use App\Services\Practicas\Weapons\BasicSword;
use App\Services\Practicas\Weapons\FireBow;
use App\Services\Practicas\Unit;
use App\Services\Practicas\Log;
use App\Services\Practicas\HtmlLogger;
use App\Services\Practicas\FileLogger;

class PracticasController extends Controller
{
    protected $translations = [
        'BasicBowAttack' => ':unit dispara una flecha a :opponent',
        'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
        'CrossBowAttack' => ':unit dispara una flecha a :opponent',
        'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
    ];

    public function translate($key, $unit, $opponent)
    {
        if (isset($this->translations[$key])) {
            return str_replace([':unit', ':opponent'], [$unit, $opponent], $this->translations[$key]);
        }
        return $key; // Devuelve la clave si no se encuentra la traducción
    }

    public function index()
    {
        // Establecer el logger (en este caso HtmlLogger, puedes usar FileLogger si prefieres)
        Log::setLogger(new HtmlLogger());

        // Ahora se puede registrar el log sin problemas
        Log::info('Iniciando simulación de batalla');
        
        $logs = [];

        $ramm = Unit::createSoldier()
            ->setWeapon(new BasicSword())
            ->setArmor(new SilverArmor())
            ->setShield();

        $silence = new Unit('Silence', new FireBow());

        // Silence ataca a Ramm dos veces
        $logs[] = $this->translate('BasicBowAttack', $silence->getName(), $ramm->getName());
        $silence->attack($ramm);
    
        $logs[] = $this->translate('BasicBowAttack', $silence->getName(), $ramm->getName());
        $silence->attack($ramm);

        // Ramm contraataca
        $logs[] = $this->translate('BasicSwordAttack', $ramm->getName(), $silence->getName());
        $ramm->attack($silence);

        // Guardar logs en la sesión
        session(['attack_logs' => $logs]);

        return view('practicas.indexp5', [
            'ramm' => $ramm,
            'silence' => $silence,
        ]);
    }
}