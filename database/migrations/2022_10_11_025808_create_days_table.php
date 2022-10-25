<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2022_10_11_025808_create_days_table.php
            $table->enum('name', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']);
=======
            $table->enum('name', ['Teori','Ruang Guru','Aula','Musholla','Ruang BK','Ruang Kepala Sekolah', 'Ruang Wakil Kepala Sekolah','Ruang LSP', 'Ruang Humas', 'Ruang TU']);
            $table->enum('num', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18'])->nullable();
>>>>>>> da2b44f (21/10/22 add-show visitor clear):database/migrations/2022_10_11_063237_create_rooms_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('days');
    }
}
