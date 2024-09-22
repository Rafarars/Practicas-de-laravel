<?php

namespace App\Http\Controllers;

use App\Services\Practicas\Armors\BronzeArmor;
use App\Services\Practicas\Armors\CursedArmor;
use App\Services\Practicas\Soldier;
use App\Services\Practicas\Archer;

class PracticasController extends Controller
{
    public function index()
    {
        // Inicializa la armadura de bronce y los personajes
        $armor = new BronzeArmor();
        $ramm = new Soldier('Ramm');
        $silence = new Archer('Silence');

        // Primer ataque: Silence ataca a Ramm
        $silence->attack($ramm);

        // Cambia la armadura de Ramm y realiza un nuevo ataque
        $ramm->setArmor(new CursedArmor());
        $silence->attack($ramm);

        // Ramm ataca a Silence
        $ramm->attack($silence);

        // Devuelve los personajes a la vista
        return view('practicas.indexp5', [
            'ramm' => $ramm,
            'silence' => $silence
        ]);
    }
}