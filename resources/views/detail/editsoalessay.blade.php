@extends('layout.master')

@section('content')
    <div class="container">
        <h4>Edit Soal Pilihan Essay</h4>
        <form method="post" action="{{ route('soalessay.update', $soalessay->id) }}">
            @csrf

            <div class="form-group row">
                <label for="namapaket" class="col-sm-2 col-form-label">Perintah Soal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="perintah_soal" value="{{ $soalessay->perintah_soal }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Isi Soal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="isi_soal" value="{{ $soalessay->isi_soal }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab" value="{{ $soalessay->jawab }}">
                </div>
            </div>
            


            <div class="col-auto">
                <button class="btn btn-outline-success" type="submit">Update</button>
                <a href="{{url("/detail/detailindex/".$soalessay->paket_id)}}"><button type="button" class="btn btn-outline-warning">Cancel</button></a>

            </div>
        </form>

    </div>

@endsection
