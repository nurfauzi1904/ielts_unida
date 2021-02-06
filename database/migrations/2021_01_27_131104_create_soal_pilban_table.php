<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalPilbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_pilbans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perintah_soal');
            $table->text('isi_soal');
            $table->string('jawab1');
            $table->string('jawab2');
            $table->string('jawab3');
            $table->string('jawab4');
            $table->string('jawab5');
            $table->string('jawab6');
            $table->string('jawab7');
            $table->string('kunci');

            $table->integer('cerita_id');
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
        Schema::dropIfExists('soal_pilbans');
    }
}
