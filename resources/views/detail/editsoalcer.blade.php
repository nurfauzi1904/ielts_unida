@extends('layout.master')

@section('content')
    <div class="container">
        <h4>Edit Soal Cerita</h4>
        <form method="post" action="{{ route('soalcer.update', $cerita->id) }}">
            @csrf

            <div class="form-group row">
                <label for="namapaket" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" value="{{ $cerita->judul }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Perintah Cerita</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="perintah_cerita" value="{{ $cerita->perintah_cerita }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Isi Cerita</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="isi_cerita" value="{{ $cerita->isi_cerita }}">
                </div>
            </div>


            <div class="col-auto">
                <button class="btn btn-outline-success" type="submit">Update</button>
                <a href="{{url("/detail/detailindex/".$cerita->paket_id)}}"><button type="button" class="btn btn-outline-warning">Cancel</button></a>

            </div>
        </form>

    </div>

@endsection
