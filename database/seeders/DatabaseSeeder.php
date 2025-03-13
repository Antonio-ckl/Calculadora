<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

<<<<<<< HEAD
        $this-> call([UserSeeder::class]);
=======
        $this->call([
            userSeeder::class
        ]);
>>>>>>> eb051021f15918989e5f5574ee886f298795f5f5
    }
}
