<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalPilganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_pilgans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perintah_soal');
            $table->text('isi_soal');
            $table->string('jawaba');
            $table->string('jawabb');
            $table->string('jawabc');
            $table->string('jawabd');
            $table->string('jawabe');
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
        Schema::dropIfExists('soal_pilgans');
    }
}
