<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('docente')->insert([
            'nombre' => 'Luis',
            'apellido' => 'Puyaut',
            'email' => 'luispuyaut@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        DB::table('estudiante')->insert([
            'nombre' => 'Luis',
            'apellido' => 'Puyaut',
            'email' => 'CP23007@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
