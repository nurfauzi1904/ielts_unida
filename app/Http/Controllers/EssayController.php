<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SoalEssay;

class EssayController extends Controller
{
    public function destroy($id)
    {
        /*destor($id) akan nagkap (id) yg dikirimkan dr form (index.blade.php filenya di view/soal/) yaitu ketika tombol hapus di klik */

        DB::table('soal_essays')->where('id', $id)->delete();

        return redirect()->back();/*ketika proses penghapusan selesai, akan diarahkan(redirect) ke halaman data soal di file view/soal/index */
    }

    public function edit($id)
    {
        $soalessay = SoalEssay::find($id);
        return view('detail.editsoalessay', compact('soalessay'));
    }

    public function update(Request $request, $id)
    {
        $soalessay                     = SoalEssay::find($id);
        $soalessay->perintah_soal      = $request->perintah_soal;
        $soalessay->isi_soal           = $request->isi_soal;
        $soalessay->jawab             = $request->jawab;
        $soalessay->save();

        return redirect("/detail/detailindex/" . $soalessay->paket_id);
    }
}
