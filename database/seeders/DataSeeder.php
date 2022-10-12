<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visitor;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::create([
            'name' => 'Wulan',
            'address' => 'Jalan Abimanyu',
            'instance' => null,
            'phone_number' => null,
            'meet_with' => 'Staff TU',
            'utilities' => 'TU',
        ]);

        Visitor::create([
            'name' => 'Johm Kendall',
            'address' => 'Presidential',
            'instance' => 'PT Johanna Luar',
            'phone_number' => '021631784',
            'meet_with' => 'Kepala Sekolah',
            'utilities' => 'Kedinasan',
        ]);

        Visitor::create([
            'name' => 'Moana',
            'address' => 'Jalan Hudayana',
            'instance' => 'CV Bintaro',
            'phone_number' => '021491393',
            'meet_with' => 'Kepala Sekolah',
            'utilities' => 'Kedinasan',
        ]);
    }
}
