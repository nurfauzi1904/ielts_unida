<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; /*untuk penamaan di delete*/
use App\Models\Paket; /* use app\models\soal= u/ muat/manggil model soal.php, yg didalamnya ada definisi tabel yg digunakan yaitu tabel soal*/

class PaketController extends Controller
{
    public function index(){
        $pakets = Paket::all()->sortByDesc('id'); /* untuk menampilkan semua(all) data pada tabel paket, (->sortbydesc= mengurutkan data y gpaling akhir di input*/
        $no = 0;
        return view('paket.index', compact('pakets', 'no')); /*compact()= u/ ngirim/passing variabel dr controller(PaketController) ke view (index.blade.php) yg terletak di folder view/soal/, dlm kasus ini yg dikirim adlh variabel data_soal */
        /* $no u/set nilai awal 0 kemudian variabel no dikirim ke view melalui fungsi compact() */
    }

    public function create(){/*akan mengarahkan ke tampilan view create,blade.php yg berada di dile view/paket/ */
        return view('paket.create');
    }

    public function proses(Request $request){/* membuat fungsi proses  dengan request/mengambil $request yg dikirim dr form create.blade.php di file view/soal/ */
        $paket = new Paket; /* membuat variabel $soal yg nilainya diambil dr model soal (yg didlmnya berupa tabel soal) */
         
        $paket->nama_paket    =$request->nama_paket;
        $paket->deskripsi     =$request->deskripsi;
        $paket->tipe          =$request->tipe;
        $paket->save();
        return redirect('/')->with('pesan','Question data is successfully saved');
    }

    public function destroy($id){/*destor($id) akan nagkap (id) yg dikirimkan dr form (index.blade.php filenya di view/soal/) yaitu ketika tombol hapus di klik */
        
        DB::table('pakets')->where('id',$id)->delete();
       
        return redirect('/')->with('pesan','Question data was successfully deleted');/*ketika proses penghapusan selesai, akan diarahkan(redirect) ke halaman data soal di file view/soal/index */
    }

    public function edit($id){
        $paket = Paket::find($id);
        return view('paket.edit', compact('paket'));
    }

    public function update(Request $request, $id)
    {
        $paket = Paket::find($id);
        
        $paket->nama_paket    =$request->nama_paket;
        $paket->deskripsi      =$request->deskripsi;
        $paket->tipe           =$request->tipe;
        $paket->update();
        return redirect('/')->with('pesan','Question data was successfully updated');
    }
}
