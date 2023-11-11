<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'nama' => 'Admin',
                'foto' => 'foto',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12345678'),
            ],
            [
                'nama' => 'Bendahara',
                'foto' => 'foto',
                'email' => 'bendahara@gmail.com',
                'role' => 'bendahara',
                'password' => bcrypt('12345678')
            ],
            [
                'nama' => 'Wali',
                'foto' => 'foto',
                'email' => 'wali@gmail.com',
                'role' => 'wali',
                'password' => bcrypt('12345678')
            ]
        ];
        foreach ($userdata as $key => $value) {
            User::create($value);
        }
    }
}
