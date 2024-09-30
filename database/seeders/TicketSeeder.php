<?php

namespace Database\Seeders;

use App\Models\Tiket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $data=array([
        'tanggal_keberangkatan' => '2024-09-30 12:30',
        'tujuan' => 'Bandung',
        'asal' => 'Bekasi',
        'nama_penumpang' => 'Thanz',
        'no_kursi' => 'D14',
    ],
    [
        'tanggal_keberangkatan' => '2024-09-30 12:30',
        'tujuan' => 'Bandung',
        'asal' => 'Bekasi',
        'nama_penumpang' => 'Nanzye',
        'no_kursi' => 'D15',
    ]);
    Tiket::insert($data);
    }
}
