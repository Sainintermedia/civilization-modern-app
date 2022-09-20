<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulationSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population_subs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_nik')->nullable()->default(16);
            $table->bigInteger('no_kk_id')->nullable()->default(16);
            $table->string('nama')->nullable();
            $table->string('jenkel')->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('jns_pekerjaan')->nullable();
            $table->string('gol_datah')->nullable();
            $table->string('sts_perkawinan')->nullable();
            $table->string('tgl_perkawinan')->nullable();
            $table->string('sts_hub_kel')->nullable();
            $table->string('kwn')->nullable();
            $table->string('no_paspor')->nullable();
            $table->string('no_kitap')->nullable();
            $table->string('nm_ayah')->nullable();
            $table->string('nm_ibu')->nullable();
            $table->timestamps();

            
            // $table->foreign('no_kk_id')->reference('id')->on('populations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('population_subs');
    }
}