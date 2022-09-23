<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('populations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_kk')->nullable()->default(16);
            $table->bigInteger('no_nik_id')->nullable()->default(16);
            $table->string('nama_kk')->nullable();
            $table->string('kp')->nullable();
            $table->integer('rt')->nullable();
            $table->integer('rw')->nullable();
            $table->integer('kodepos')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabkot')->nullable();
            // $table->string('kabupaten')->nullable();
            // $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->timestamps();

            // $table->foreign('no_nik_id')->reference('id')->on('population_subs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('populations');
    }
}