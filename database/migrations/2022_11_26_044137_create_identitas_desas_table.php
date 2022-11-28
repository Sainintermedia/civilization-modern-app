<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_desas', function (Blueprint $table) {
            $table->id();
            $table->string('nm_desa')->nullable();
            $table->string('kd_desa')->nullable();
            $table->string('kd_pos_desa')->nullable();
            $table->string('nm_kepala_desa')->nullable();
            $table->string('nip_kepala_desa')->nullable();
            $table->string('alamat_kntr_desa')->nullable();
            $table->string('email_desa')->nullable();
            $table->string('tlp_desa')->nullable();
            $table->string('web_desa')->nullable();
            $table->string('nm_kec')->nullable();
            $table->string('kd_kec')->nullable();
            $table->string('nm_camat')->nullable();
            $table->string('nip_camat')->nullable();
            $table->string('nm_kabkot')->nullable();
            $table->string('kd_kabkot')->nullable();
            $table->string('nm_provinsi')->nullable();
            $table->string('kd_provinsi')->nullable();
            $table->string('gambar_desa')->nullable();
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
        Schema::dropIfExists('identitas_desas');
    }
}