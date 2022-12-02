<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_subs', function (Blueprint $table) {
            $table->id();
            $table->string('no_srt')->nulable();
            $table->string('jns_srt')->nulable();
            $table->string('nik')->nulable();
            $table->string('no_kk')->nulable();
            $table->string('user_id')->nulable();
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
        Schema::dropIfExists('surat_subs');
    }
}