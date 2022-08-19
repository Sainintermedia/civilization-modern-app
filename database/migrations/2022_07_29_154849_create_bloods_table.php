<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_bloods', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD:database/migrations/2022_07_28_065118_create_tabel_bloods.php
        Schema::dropIfExists('m_bloods');
=======
        Schema::dropIfExists('bloods');
>>>>>>> 7940a2af0a6ac8ea4c64945c4452703e670b3286:database/migrations/2022_07_29_154849_create_bloods_table.php
    }
}
