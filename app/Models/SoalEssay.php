<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoalEssay extends Model
{
    protected $table = 'soal_essays'; //pilih tablenya dari database

    protected $fillable = ['perintah_soal', 'isi_soal', 'jawab'];

    public function ceritas(){
        return $this->belongsTo('App\Models\Cerita', 'cerita_id', 'id');
    }
}
