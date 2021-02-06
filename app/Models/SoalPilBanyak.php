<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SoalPilBanyak extends Model
{
    protected $table = 'soal_pilbans'; //pilih tablenya dari database

    protected $fillable = ['perintah_soal', 'isi_soal', 'jawab1','jawab2','jawab3','jawab4','jawab5', 'jawab6', 'jawab7','kunci'];

    public function ceritas(){
        return $this->belongsTo('App\Models\Cerita', 'cerita_id', 'id');
    }
}
