<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMFamilys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_familys', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('no_kk', 16);
            $table->string('nik_kepala', 200);
            $table->timestamp('tgl_daftar', $precision = 0);
            $table->integer('kelas_sosial', 11);
            $table->datetime('tgl_cetak_kk', $precision = 0);
            $table->string('alamat', 200);
            $table->integer('id_cluster',11);
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
        Schema::dropIfExists('m_familys');
    }
}
