<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SoalPilBanyak;

class PilbanController extends Controller
{
    public function destroy($id)
    {
        /*destor($id) akan nagkap (id) yg dikirimkan dr form (index.blade.php filenya di view/soal/) yaitu ketika tombol hapus di klik */

        DB::table('soal_pilbans')->where('id', $id)->delete();

        return redirect()->back();/*ketika proses penghapusan selesai, akan diarahkan(redirect) ke halaman data soal di file view/soal/index */
    }

    public function edit($id)
    {
        $soalpilban = SoalPilBanyak::find($id);
        return view('detail.editsoalpilban', compact('soalpilban'));
    }

    public function update(Request $request, $id)
    {
        $soalpilban                     = SoalPilBanyak::find($id);
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
        $soalpilban->save();

        return redirect("/detail/detailindex/" . $soalpilban->paket_id);
    }
}
