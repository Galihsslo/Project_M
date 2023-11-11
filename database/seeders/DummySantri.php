<?php

namespace Database\Seeders;

use App\Models\Santri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySantri extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $santri = [
            [
                'nama'      => 'Galih',
                'alamat'    => 'Lampung',
                'usia'      => '21',
                'wali'      => 'Jokowi',
                'status'      => 'aktif',
            ],
            [
                'nama'      => 'Silvia',
                'alamat'    => 'Jakarta',
                'usia'      => '22',
                'wali'      => 'Prabowo',
                'status'      => 'aktif',
            ],
            [
                'nama'      => 'James',
                'alamat'    => 'Kalimantan',
                'usia'      => '23',
                'wali'      => 'Pratama',
                'status'      => 'aktif',
            ],
        ];
        foreach ($santri as $key => $value) {
            Santri::create($value);
        }
    }
}
