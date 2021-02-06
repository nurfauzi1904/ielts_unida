<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paket;
use App\Models\Cerita;
use App\Models\SoalPil;
use App\Models\SoalPilBanyak;
use App\Models\SoalEssay;
use Illuminate\Support\Facades\DB;


class DetailController extends Controller
{

    public function index($id)
    {
        $paket         = Paket::find($id); /* untuk menampilkan semua(all) data pada tabel paket*/
        $cerita        = Cerita::where("paket_id", $id)->get();
        $soalpil       = SoalPil::where("paket_id", $id)->get();
        $soalpilban    = SoalPilBanyak::where("paket_id", $id)->get();
        $soalessay     = SoalEssay::where("paket_id", $id)->get();

        return view('detail.detailindex', compact('paket', 'cerita', 'soalpil', 'soalpilban', 'soalessay'));
    }

    

   
}
