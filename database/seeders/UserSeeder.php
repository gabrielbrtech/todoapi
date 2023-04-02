<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Gabriel',
            'last_name' => 'Camurça',
            'email' => 'gabriel@brtech.dev',
            'password' => bcrypt('Password1'),
        ]);

        User::factory(count: 5)->create();
    }
}
