<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
<<<<<<< HEAD
            'name'=>'Admin',
            'email'=> 'Admin@test.com',
            'password'=> Hash::make('123456'),
            'role'=> 'admin'
        ]);

        User::create([
            'name'=>'User',
            'email'=> 'User@test.com',
            'password'=> Hash::make('123456'),
            'role'=> 'user'
        ]);
    }
}
=======
            'name' => 'admin',
            'email' => 'admin@teste.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'professor',
            'email' => 'professor@teste.com',
            'password' => Hash::make('123456'),
            'role' => 'professor'
        ]);

        User::create([
            'name' => 'aluno',
            'email' => 'aluno@teste.com',
            'password' => Hash::make('123456'),
            'role' => 'aluno'
        ]);
    }
}
>>>>>>> eb051021f15918989e5f5574ee886f298795f5f5
