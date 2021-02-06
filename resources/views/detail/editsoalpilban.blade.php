@extends('layout.master')

@section('content')
    <div class="container">
        <h4>Edit Soal Pilihan Banyak</h4>
        <form method="post" action="{{ route('soalpilban.update', $soalpilban->id) }}">
            @csrf

            <div class="form-group row">
                <label for="namapaket" class="col-sm-2 col-form-label">Perintah Soal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="perintah_soal" value="{{ $soalpilban->perintah_soal }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Isi Soal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="isi_soal" value="{{ $soalpilban->isi_soal }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab1" value="{{ $soalpilban->jawab1 }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab2" value="{{ $soalpilban->jawab2 }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab 3</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab3" value="{{ $soalpilban->jawab3 }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab 4</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab4" value="{{ $soalpilban->jawab4 }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab 5</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab5" value="{{ $soalpilban->jawab5 }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab 6</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab6" value="{{ $soalpilban->jawab6 }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab 7</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab7" value="{{ $soalpilban->jawab7 }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Kunci</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kunci" value="{{ $soalpilban->kunci }}">
                </div>
            </div>


            <div class="col-auto">
                <button class="btn btn-outline-success" type="submit">Update</button>
                <a href="{{url("/detail/detailindex/".$soalpilban->paket_id)}}"><button type="button" class="btn btn-outline-warning">Cancel</button></a>

            </div>
        </form>

    </div>

@endsection
