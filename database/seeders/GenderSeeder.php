<?php

namespace Database\Seeders;

use App\Models\Gender as GenderModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    const GENDERS = [
        'Eletrônica',
        'Rock',
        'Jazz',
        'R&B',
        'Country',
        'Pop',
        'Hip-hop',
        'Clássica',
        'Reggae',
        'Bossa Nova',
        'Kpop'
    ];




    public function run(): void
    {
        foreach( self::GENDERS  as $gender ){
            GenderModel::FirstOrCreate(['name' => $gender]);
        }
    }
}
