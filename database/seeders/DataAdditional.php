<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;

class DataAdditional extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Major::create([
            'name' => 'Rekayasa Perangkat Lunak'
        ]);
        Major::create([
            'name' => 'Akuntasi Keuangan Lembaga'
        ]);
        Major::create([
            'name' => 'Bisnis Daring Pemasaran'
        ]);
        Major::create([
            'name' => 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        
        Major::create([
            'class' => '1'
        ]);
        Major::create([
            'class' => '2'
        ]);
    }
}
