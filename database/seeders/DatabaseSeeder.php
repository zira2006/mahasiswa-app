<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // Mahasiswa User
        User::updateOrCreate(
            ['email' => 'mahasiswa@example.com'],
            [
                'name' => 'Mahasiswa Test',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
            ]
        );

        // Mahasiswa Data
        Mahasiswa::updateOrCreate(
            ['npm' => '20210001'],
            [
                'nama' => 'Ahmad Rizki Pratama',
                'jurusan' => 'Informatika',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'no_hp' => '081234567890',
            ]
        );

        Mahasiswa::updateOrCreate(
            ['npm' => '20210002'],
            [
                'nama' => 'Siti Nurhaliza',
                'jurusan' => 'Sistem Informasi',
                'alamat' => 'Jl. Sudirman No. 25, Bandung',
                'no_hp' => '082345678901',
            ]
        );

        Mahasiswa::updateOrCreate(
            ['npm' => '20210003'],
            [
                'nama' => 'Budi Santoso',
                'jurusan' => 'Teknik Komputer',
                'alamat' => 'Jl. Diponegoro No. 5, Surabaya',
                'no_hp' => '083456789012',
            ]
        );

        Mahasiswa::updateOrCreate(
            ['npm' => '20210004'],
            [
                'nama' => 'Dewi Lestari',
                'jurusan' => 'Informatika',
                'alamat' => 'Jl. Gajah Mada No. 15, Yogyakarta',
                'no_hp' => '084567890123',
            ]
        );

        Mahasiswa::updateOrCreate(
            ['npm' => '20210005'],
            [
                'nama' => 'Eko Prasetyo',
                'jurusan' => 'Sistem Informasi',
                'alamat' => 'Jl. Ahmad Yani No. 30, Semarang',
                'no_hp' => '085678901234',
            ]
        );
    }
}
