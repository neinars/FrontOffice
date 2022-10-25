<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['Teori','Ruang Guru','Aula','Musholla','Ruang BK','Ruang Kepala Sekolah', 'Ruang Wakil Kepala Sekolah','Ruang LSP', 'Ruang Humas', 'Ruang TU']);
            $table->enum('num', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18'])->nullable();
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
        Schema::dropIfExists('rooms');
    }
}