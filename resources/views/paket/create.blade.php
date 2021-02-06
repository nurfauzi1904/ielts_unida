@extends('layout.master')<!--file index.blade.php sebagai child page yg extend/memperpanjang file di master.blade.php di folder view/layout sbg parent page dn cukup di sebut master -->

@section('content')<!-- @ yield  ada di file layout/master.blade.php bagian tsb akan di isi olh section dgn nama content -->
    <div class="container"> <!--isi kodingan dari section dengan nama content -->
        <h4>Tambah Paket</h4>
        
        <form method="post" action="{{ route('paket.proses') }}">
        @csrf
        <div class="form-group row"> 
            <label for="namapaket" class="col-sm-2 col-form-label">Nama Paket</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_paket">
            </div>
        </div>
        <div class="form-group row"> 
            <label for="deskripsi" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="deskripsi">
            </div>
        </div>
        <div class="form-group row"> 
            <label for="tipejenis" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tipe">
            </div>
        </div>
        
        <div class="col-auto">
            <button class="btn btn-outline-success" type="submit">Save</button>
            <a href="/"><button type="button" class="btn btn-outline-warning">Cancel</button></a>
        </div>
        </form>

    </div>
    
@endsection