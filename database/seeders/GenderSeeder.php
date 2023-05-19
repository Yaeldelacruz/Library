<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gender::create([
            'type' => 'ficcion'
        ]);
        Gender::create([
            'type' => 'no ficcion'
        ]);
        Gender::create([
            'type' => 'terror'
        ]);
        Gender::create([
            'type' => 'poesia'
        ]);
        Gender::create([
            'type' => 'narrativa'
        ]);
        Gender::create([
            'type' => 'ensayo'
        ]);
        Gender::create([
            'type' => 'comic'
        ]);
        Gender::create([
            'type' => 'infantiles'
        ]);
        Gender::create([
            'type' => 'juridica'
        ]);
        Gender::create([
            'type' => 'juvenil'
        ]);
    }
}
