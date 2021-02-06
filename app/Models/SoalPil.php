<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoalPil extends Model
{
    protected $table = 'soal_pilgans'; //pilih tablenya dari database

    protected $fillable = ['perintah_soal', 'isi_soal', 'jawaba','jawabb','jawabc','jawabd','jawabe', 'kunci'];

    public function ceritas(){
        return $this->belongsTo('App\Models\Cerita', 'cerita_id', 'id');
    }
    
}
