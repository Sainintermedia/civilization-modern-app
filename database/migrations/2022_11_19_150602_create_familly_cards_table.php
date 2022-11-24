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
            $table->string('kp')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->integer('kodepos')->nullable();
            $table->string('desa')->nullable();
            $table->integer('kecamatan')->nullable();
            $table->integer('kabkot')->nullable();
            $table->integer('provinsi')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('sts')->nullable();
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