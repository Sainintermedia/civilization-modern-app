<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamillyCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familly_cards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_kk')->nullable()->default(16);
            $table->bigInteger('no_nik')->nullable()->default(16);
            $table->string('nama')->nullable();
            $table->string('kp')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->integer('kodepos')->nullable();
            $table->integer('desa')->nullable();
            $table->integer('kecamatan')->nullable();
            $table->integer('kabkot')->nullable();
            $table->integer('provinsi')->nullable();
            $table->integer('jenkel')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->integer('agama')->nullable();
            $table->integer('pendidikan')->nullable();
            $table->integer('jns_pekerjaan')->nullable();
            $table->integer('gol_darah')->nullable();
            $table->integer('sts_perkawinan')->nullable();
            $table->date('tgl_perkawinan')->nullable();
            $table->integer('sts_hub_kel')->nullable();
            $table->integer('sts_kwn')->nullable();
            $table->string('nm_ayah')->nullable();
            $table->string('nm_ibu')->nullable();
            $table->bigInteger('nik_ayah')->nullable()->default(16);
            $table->bigInteger('nik_ibu')->nullable()->default(16);
            $table->integer('sts_mati')->nullable();
            $table->integer('no_paspor')->nullable();
            $table->integer('no_kitap')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('familly_cards');
    }
}