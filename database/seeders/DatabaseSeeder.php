<?php

namespace Database\Seeders;
use App\Models\Gender as GenderModel;
use App\Models\Instrument as InstrumentModel;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        if(!GenderModel::count())
        {
            $this->call([GenderSeeder::class]);
        }
        if(!InstrumentModel::count())
        {
            $this->call([InstrumentSeeder::class]);
        }
    }
}
