<?php

namespace Database\Seeders;

use App\Models\Nacionality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacionalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nacionality::create([
            'name' => 'Mexico'
        ]);
        Nacionality::create([
            'name' => 'España'
        ]);
        Nacionality::create([
            'name' => 'Estados Unidos Americanos'
        ]);
    }
}
