<?php

namespace Database\Seeders;
use App\Models\Instrument as InstrumentModel;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    const INSTRUMENTS = [
        'Bateria',
        'Acordeão',
        'Harpa',
        'Orgão',
        'Trompa',
        'Violão',
        'Piano',
        'Gaita de Fole',
        'Violino',
        'Oboé'
    ];
    public function run(): void
    {
        foreach(self::INSTRUMENTS as $instrument ){
            InstrumentModel::FirstOrCreate(['name' => $instrument]);
        }  //
    }
}
