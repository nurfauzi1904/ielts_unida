<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
    protected $table = 'ceritas'; //pilih tablenya dari database

    protected $fillable = ['perintah_cerita', 'isi_cerita']; //Untuk memilih attribut tabel yang boleh di isi

    public function soalpil(){
        
        return $this->hasMany('App\Models\SoalPil', 'cerita_id', 'id');
    }

    public function soalpilban(){
        
        return $this->hasMany('App\Models\SoalPilBanyak', 'cerita_id', 'id');
    }

    public function soalessay(){
        
        return $this->hasMany('App\Models\SoalEssay', 'cerita_id', 'id');
    }

}
