<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DemoAccountSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@kampuslms.test'],
            [
                'name' => 'Admin Demo',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'nim_nip' => 'ADM001',
            ]
        );

        User::updateOrCreate(
            ['email' => 'dosen@kampuslms.test'],
            [
                'name' => 'Dosen Demo',
                'password' => Hash::make('password'),
                'role' => 'dosen',
                'nim_nip' => 'DSN001',
            ]
        );

        User::updateOrCreate(
            ['email' => 'mahasiswa@kampuslms.test'],
            [
                'name' => 'Mahasiswa Demo',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'nim_nip' => 'MHS001',
            ]
        );
    }
}