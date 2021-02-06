<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cerita;
use Illuminate\Support\Facades\DB;

class CeritaController extends Controller
{
    public function destroy($id)
    {
        /*destor($id) akan nagkap (id) yg dikirimkan dr form (index.blade.php filenya di view/soal/) yaitu ketika tombol hapus di klik */

        DB::table('ceritas')->where('id', $id)->delete();

        return redirect()->back();/*ketika proses penghapusan selesai, akan diarahkan(redirect) ke halaman data soal di file view/soal/index */
    }

    public function edit($id)
    {
        $cerita = Cerita::find($id);
        return view('detail.editsoalcer', compact('cerita'));
    }

    public function update(Request $request, $id)
    {
        $cerita                     = Cerita::find($id);
        $cerita->judul              = $request->judul;
        $cerita->perintah_cerita    = $request->perintah_cerita;
        $cerita->isi_cerita         = $request->isi_cerita;
        $cerita->save();
        
        return redirect("/detail/detailindex/".$cerita->paket_id);
    }





}
