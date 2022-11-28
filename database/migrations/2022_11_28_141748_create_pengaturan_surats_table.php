<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturanSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pengaturan_surats', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('kop_srt')->nullable();
            $table->string('jns_surat')->nullable();
            $table->string('no_srt')->nullable();
            $table->string('body')->nullable();
            $table->string('ttd')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('pengaturan_surats');
    }
}