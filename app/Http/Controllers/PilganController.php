<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoalPil;
use Illuminate\Support\Facades\DB;

class PilganController extends Controller
{
    public function destroy($id)
    {
        /*destor($id) akan nagkap (id) yg dikirimkan dr form (index.blade.php filenya di view/soal/) yaitu ketika tombol hapus di klik */

        DB::table('soal_pilgans')->where('id', $id)->delete();

        return redirect()->back();/*ketika proses penghapusan selesai, akan diarahkan(redirect) ke halaman data soal di file view/soal/index */
    }

    public function edit($id)
    {
        $soalpil = SoalPil::find($id);
        return view('detail.editsoalpil', compact('soalpil'));
    }

    public function update(Request $request, $id)
    {
        $soalpil                     = SoalPil::find($id);
        $soalpil->perintah_soal      = $request->perintah_soal;
        $soalpil->isi_soal           = $request->isi_soal;
        $soalpil->jawaba             = $request->jawaba;
        $soalpil->jawabb             = $request->jawabb;
        $soalpil->jawabc             = $request->jawabc;
        $soalpil->jawabd             = $request->jawabd;
        $soalpil->jawabe             = $request->jawabe;
        $soalpil->kunci              = $request->kunci;
        $soalpil->save();

        return redirect("/detail/detailindex/" . $soalpil->paket_id);
    }
}
