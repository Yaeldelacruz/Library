<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Yael de la Cruz',
            'email' => 'yaelcontreras344@gmail.com',
            'password' => bcrypt('yael1234'),
        ]);
        User::factory(20)->create();
    }
}
