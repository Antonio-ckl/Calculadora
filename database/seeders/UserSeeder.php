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
