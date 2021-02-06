<?php

namespace App\Models; //menandakan lokasi file dmn

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'pakets';/*menyambung ke nama database dg nama pakets */
    protected $fillable=[
        'id','nama_paket','deskripsi','tipe'
    ];/*untuk mengisi atribut table dr soals */
}
