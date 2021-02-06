@extends('layout.master')<!--file index.blade.php sebagai child page yg extend/memperpanjang file di master.blade.php di folder view/layout sbg parent page dn cukup di sebut master -->

@section('content')<!-- @ yield  ada di file layout/master.blade.php bagian tsb akan di isi olh section dgn nama content -->
    <div class="container"> <!--isi kodingan dari section dengan nama content -->
        <div>@if (Session::has('pesan'))<!--jka ada flash mesasge bernama (pesan)maka akan menjalankan kodenya di bawah -->
            <div>{{ Session::get('pesan')}}</div> <!--menampilkan isi pesan flash message -->
            
        @endif</div>
        <h4>Data Paket</h4>
        <p align="right"><a href="{{ route('paket.create') }}"><button type="button" class="btn btn-outline-primary">Tambah Paket</button></a></p>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>  
                    <th>Nama Paket</th>
                    <th>Deskripsi</th>
                    <th>Type Soal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pakets as $paket) <!-- @ foreach= digunakan u/ nampilin data array, dmn hal ini adlh (@ data_ soal) u/ selanjutnya diganti penyebutannya (as) dengan $soal -->
                <tr>
                    <td>{{ ++$no }}</td>  <!--variabel $no sampai ke view (index.blade.php, mka akan di tambah 1 (++$no), jdi yg semula $no bernilai 0 ditambah 1=1 ketika perulangan berikutnya $no bernilai 1 akan ditambah 1=2 dst ) -->
                    
                    <td>{{ $paket->nama_paket }}</td>
                    <td>{{ $paket->deskripsi }}</td>
                    <td>{{ $paket->tipe }}</td>
                    <td> 
                        
                         <!--bagian action berupa route soal.destroy(sesuai dg nama route yg sdh di definisikan di web.php, kemudian $soal->id tombol hapus ketika di klik jga akan ngirim (id) soal yg dihapus) -->
                        <a href="{{ route('paket.edit', $paket->id) }}"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                        <a href="{{ route('detail_index', $paket->id) }}"><button type="button" class="btn btn-outline-info" >Detail</button></a>
                        <a href="{{ route('paket.destroy', $paket->id) }}"> <button type="button" class="btn btn-outline-danger" >Delete</button></a>
                        
                    </td>
                    
                    
                </tr>
                    
                @endforeach
            </tbody>

        </table>

    </div>
    
@endsection