<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Room;
use App\Models\Teacher;



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
            'name' => 'Akuntansi Keuangan Lembaga'
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

        Room::create([
            'name' => 'Teori'
        ]);
        Room::create([
            'name' => 'Ruang Guru'
        ]);
        Room::create([
            'name' => 'Aula'
        ]);
        Room::create([
            'name' => 'Musholla'
        ]);
        Room::create([
            'name' => 'Ruang BK'
        ]);
        Room::create([
            'name' => 'Ruang Kepala Sekolah'
        ]);
        Room::create([
            'name' => 'Ruang Wakil Kepala Sekolah'
        ]);
        Room::create([
            'name' => 'Ruang LSP'
        ]);
        Room::create([
            'name' => 'Ruang Humas'
        ]);
        Room::create([
            'name' => 'Ruang TU'
        ]);
        Room::create([
            'name' => 'Lab RPL'
        ]);
        Room::create([
            'name' => 'Lab AKL'
        ]);
        Room::create([
            'name' => 'Lab OTKP'
        ]);
        Room::create([
            'name' => 'Lab BDP'
        ]);

        Room::create([
            'num' => '1'
        ]);
        Room::create([
            'num' => '2'
        ]);
        Room::create([
            'num' => '3'
        ]);
        Room::create([
            'num' => '4'
        ]);
        Room::create([
            'num' => '5'
        ]);
        Room::create([
            'num' => '6'
        ]);
        Room::create([
            'num' => '7'
        ]);
        Room::create([
            'num' => '8'
        ]);
        Room::create([
            'num' => '9'
        ]);
        Room::create([
            'num' => '10'
        ]);
        Room::create([
            'num' => '11'
        ]);
        Room::create([
            'num' => '12'
        ]);
        Room::create([
            'num' => '13'
        ]);
        Room::create([
            'num' => '14'
        ]);
        Room::create([
            'num' => '15'
        ]);
        Room::create([
            'num' => '16'
        ]);
        Room::create([
            'num' => '17'
        ]);
        Room::create([
            'num' => '18'
        ]);

        Major::create([
            ''
        ]);

        Teacher::create([
            'name' => 'Bpk. Mujahid',
            'subject' => 'Pemrograman Dasar',
            'days_id' => 1,
            'rooms_id' => 11,
            'majors_id' => 1,
            'hour_start' => '12.12',
            'hour_end' => '15.00'
        ]);
    }
}
