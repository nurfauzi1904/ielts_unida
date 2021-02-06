<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paket;
use App\Models\Cerita;
use App\Models\SoalPil;
use App\Models\SoalPilBanyak;
use App\Models\SoalEssay;


class FormController extends Controller
{
    
    public function soalcer($id){

            
            return view('form.soalcer', compact("id"));
    }
    
    public function soalpil($id){
        
        $cerita = Cerita::where("paket_id", $id)->get();
        return view('form.soalpil', compact('cerita', 'id'));
    }

    public function soalpilban($id){

        $cerita =Cerita::where("paket_id", $id)->get();    
        return view('form.soalpilban', compact('cerita', 'id'));
    }

    public function soalessay($id){

        $cerita= Cerita::where("paket_id", $id)->get();    
        return view('form.soalessay', compact('cerita', 'id'));
    }

    public function post(Request $request){/* membuat fungsi proses  dengan request/mengambil $request yg dikirim dr form create.blade.php di file view/soal/ */
        $cerita = new Cerita; /* membuat variabel $soal yg nilainya diambil dr model soal (yg didlmnya berupa tabel soal) */
        $cerita->paket_id           =$request->paket_id;
        $cerita->judul              =$request->judul;
        $cerita->perintah_cerita    = $request->perintah_cerita;
        $cerita->isi_cerita         = $request->isi_cerita;
        $cerita->save();
        return redirect("/detail/detailindex/".$cerita->paket_id);
        
    }

    public function post1(Request $request){/* membuat fungsi proses  dengan request/mengambil $request yg dikirim dr form create.blade.php di file view/soal/ */
        $soalpil = new SoalPil; /* membuat variabel $soal yg nilainya diambil dr model soal (yg didlmnya berupa tabel soal) */
        
        $soalpil->cerita_id          =$request->cerita_id;
        $soalpil->perintah_soal      = $request->perintah_soal;
        $soalpil->isi_soal           = $request->isi_soal;
        $soalpil->jawaba             = $request->jawaba;
        $soalpil->jawabb             = $request->jawabb;
        $soalpil->jawabc             = $request->jawabc;
        $soalpil->jawabd             = $request->jawabd;
        $soalpil->jawabe             = $request->jawabe;
        $soalpil->kunci              = $request->kunci;
        $soalpil->paket_id           = $request->paket_id;
        $soalpil->save();
        return redirect("/detail/detailindex/".$request->paket_id);
        // return redirect()->back()->with('pesan','Question data is successfully saved');
    }

    public function post2(Request $request){/* membuat fungsi proses  dengan request/mengambil $request yg dikirim dr form create.blade.php di file view/soal/ */
        $soalpilban = new SoalPilBanyak; /* membuat variabel $soal yg nilainya diambil dr model soal (yg didlmnya berupa tabel soal) */
        
        $soalpilban->cerita_id          =$request->cerita_id;
        $soalpilban->perintah_soal      = $request->perintah_soal;
        $soalpilban->isi_soal           = $request->isi_soal;
        $soalpilban->jawab1             = $request->jawab1;
        $soalpilban->jawab2             = $request->jawab2;
        $soalpilban->jawab3             = $request->jawab3;
        $soalpilban->jawab4             = $request->jawab4;
        $soalpilban->jawab5             = $request->jawab5;
        $soalpilban->jawab6             = $request->jawab6;
        $soalpilban->jawab7             = $request->jawab7;
        $soalpilban->kunci              = $request->kunci;
        $soalpilban->paket_id           = $request->paket_id;
        $soalpilban->save();
        return redirect("/detail/detailindex/".$request->paket_id);
        // return redirect()->back()->with('pesan','Question data is successfully saved');
    }

    public function post3(Request $request){
        $soalessay= new SoalEssay;

        $soalessay->cerita_id       =$request->cerita_id;
        $soalessay->perintah_soal   =$request->perintah_soal;
        $soalessay->isi_soal        =$request->isi_soal;
        $soalessay->jawab           =$request->jawab;
        $soalessay->paket_id        = $request->paket_id;
        $soalessay->save();
        return redirect("/detail/detailindex/".$request->paket_id);

    }

   

    
}
