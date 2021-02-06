@extends('layout.master')

@section('content')
    <div class="container">
        <h4>Edit Soal Pilihan Ganda</h4>
        <form method="post" action="{{ route('soalpil.update', $soalpil->id) }}">
            @csrf

            <div class="form-group row">
                <label for="namapaket" class="col-sm-2 col-form-label">Perintah Soal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="perintah_soal" value="{{ $soalpil->perintah_soal }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Isi Soal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="isi_soal" value="{{ $soalpil->isi_soal }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab A</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawaba" value="{{ $soalpil->jawaba }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab B</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawabb" value="{{ $soalpil->jawabb }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab C</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawabc" value="{{ $soalpil->jawabc }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab D</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawabd" value="{{ $soalpil->jawabd }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Jawab E</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawabe" value="{{ $soalpil->jawabe }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Kunci</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kunci" value="{{ $soalpil->kunci }}">
                </div>
            </div>


            <div class="col-auto">
                <button class="btn btn-outline-success" type="submit">Update</button>
                <a href="{{url("/detail/detailindex/".$soalpil->paket_id)}}"><button type="button" class="btn btn-outline-warning">Cancel</button></a>

            </div>
        </form>

    </div>

@endsection
