@extends('layout.master')

@section('content')
    <div class="container">
        <h4>Edit Paket</h4>
        <form method="post"
        action="{{ route('paket.update', $paket->id) }}">
        @csrf
         
        <div class="form-group row">
            <label for="namapaket" class="col-sm-2 col-form-label">Nama Paket</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_paket" value="{{$paket->nama_paket}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="deskripsi" value="{{$paket->deskripsi}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tipejenis" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tipe" value="{{$paket->tipe}}">
            </div>
        </div>
        
        
            <div class="col-auto">
                <button class="btn btn-outline-success" type="submit">Update</button>
                <a href="/"><button type="button" class="btn btn-outline-warning">Cancel</button></a>
                
            </div>
        </form>

    </div>
    
@endsection