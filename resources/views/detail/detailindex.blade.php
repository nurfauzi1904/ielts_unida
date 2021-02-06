@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="box1">
                <h3 class="box-title">Information</h3>

                <div class="box-body">
                    <hr style="margin: 10px 0">
                    <table class="table table-condensed">
                        <tbody>
                            <tr style="font-weight: 600; color: #e61111;">
                                <td>ID Package</td>
                                <td width="15px">:</td>
                                <td>{{ $paket->id }}</td>
                            </tr>
                            <tr>
                                <td width="100px">Name Package</td>
                                <td width="15px">:</td>
                                <td>{{ $paket->nama_paket }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>:</td>
                                <td>{{ $paket->deskripsi }}</td>
                            </tr>
                            <tr>
                                <td>Type Question</td>
                                <td>:</td>
                                <td>{{ $paket->tipe }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p align="right"><a a href="/" class="btn btn-danger btn-md">Back</a></p>
                </div>
            </div>


            <div id="box2" class="col-sm-8">
                <div class="box-header with-border">
                    <h3 class="box-title">Soal Cerita</h3>
                    <p align="right"><a href="{{ url('soalcer') }}/{{ $paket->id }}"><button type="button"
                                class="btn btn-outline-primary">Tambah Soal Cerita</button></a></p>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="text-align: center;">Judul</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cerita as $cerita)
                                <tr>
                                    <td>{{ $cerita->id }}</td>
                                    <td style="text-align: center">{{ $cerita->judul }}</td>
                                    <td style="text-align: center">

                                        <a href="{{ route('soalcer.edit', $cerita->id) }}" class="btn btn-outline-secondary">
                                                Edit
                                        </a>
                                        <a href="{{ route('soalcer.destroy', $cerita->id) }}" class="btn btn-outline-danger">
                                                Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Soal Pilihan</h3>
                        <p align="right"><a href="{{ url('soalpil') }}/{{ $paket->id }}"><button type="button"
                                    class="btn btn-outline-primary">Tambah Soal Pilihan</button></a></p>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="text-align: center;">Judul Cerita</th>
                                    <th style="text-align: center;">Isi Soal</th>
                                    <th style="text-align: center;">Jawaban</th>
                                    <th style="text-align: center;">Kunci</th>

                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soalpil as $kolom)
                                    <tr>
                                        <td>{{ $kolom->id }}</td>
                                        <td style="text-align: center">{{ $kolom->ceritas->judul }}</td>
                                        <td style="text-align: center">{{ $kolom->isi_soal }}</td>
                                        <td>
                                            <select class="form-control textarea" name="soalpil_id">
                                            <option>{{$kolom->jawaba}}</option>
                                            <option>{{$kolom->jawabb}}</option>
                                            <option>{{$kolom->jawabc}}</option>
                                            <option>{{$kolom->jawabd}}</option>
                                            <option>{{$kolom->jawabe}}</option>
                                            </select>
                                        </td>
                                        <td style="text-align: center">{{ $kolom->kunci}}</td>

                                        <td style="text-align: center">

                                            <a href="{{ route('soalpil.edit', $kolom->id) }}" class="btn btn-outline-secondary">
                                                    Edit
                                            </a>
                                            <a href="{{ route('soalpil.destroy', $kolom->id) }}" class="btn btn-outline-danger">
                                                    Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Soal Pilihan Banyak</h3>
                        <p align="right"><a href="{{ url('soalpilban') }}/{{ $paket->id }}"><button type="button"
                                    class="btn btn-outline-primary">Tambah Soal Pilihan Banyak</button></a></p>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="text-align: center;">Judul Cerita</th>
                                    <th style="text-align: center;">Isi Soal</th>
                                    <th style="text-align: center;">Jawaban</th>
                                    <th style="text-align: center;">Kunci</th>

                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soalpilban as $kolom2)
                                    <tr>
                                        <td>{{ $kolom2->id }}</td>
                                        <td style="text-align: center">{{ $kolom2->ceritas->judul }}</td>
                                        <td style="text-align: center">{{ $kolom2->isi_soal }}</td>
                                        <td>
                                            <select class="form-control textarea" name="soalpilban_id">
                                                <option>{{$kolom2->jawab1}}</option>
                                                <option>{{$kolom2->jawab2}}</option>
                                                <option>{{$kolom2->jawab3}}</option>
                                                <option>{{$kolom2->jawab4}}</option>
                                                <option>{{$kolom2->jawab5}}</option>
                                                <option>{{$kolom2->jawab6}}</option>
                                                <option>{{$kolom2->jawab7}}</option>
                                            </select>
                                        </td>
                                        <td style="text-align: center">{{ $kolom->kunci}}</td>
                                        <td style="text-align: center">

                                            <a href="{{ route('soalpilban.edit', $kolom2->id) }}" class="btn btn-outline-secondary">
                                                    Edit
                                            </a>
                                            <a href="{{ route('soalpilban.destroy', $kolom2->id) }}" class="btn btn-outline-danger">
                                                    Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Soal Pilihan Essay</h3>
                        <p align="right"><a href="{{ url('soalessay') }}/{{ $paket->id }}"><button type="button"
                                    class="btn btn-outline-primary">Tambah Soal Pilihan Essay</button></a></p>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="text-align: center;">Judul Cerita</th>
                                    <th style="text-align: center;">Isi Soal</th>
                                    <th style="text-align: center;">Jawaban</th>

                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soalessay as $kolom3)
                                    <tr>
                                        <td>{{ $kolom->id }}</td>
                                        <td style="text-align: center">{{ $kolom3->ceritas->judul }}</td>
                                        <td style="text-align: center">{{ $kolom3->isi_soal }}</td>
                                        <td style="text-align: center;">{{$kolom3->jawab}}</td>

                                        <td style="text-align: center">

                                            <a href="{{ route('soalessay.edit', $kolom3->id) }}" class="btn btn-outline-secondary">
                                                    Edit
                                            </a>
                                            <a href="{{ route('soalessay.destroy', $kolom3->id) }}" class="btn btn-outline-danger">
                                                    Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


<style type="text/css">
    #box1 {
        width: 400px;
        height: 370px;
        padding: 15px;
        border: 4px solid rgb(0, 174, 255);
        margin: 10px;
        background: #92d2f7
    }

    #box2 {
        width: auto;
        height: 100%;
        padding: 15px;
        border: 4px solid rgb(255, 0, 0);
        margin: auto;

    }

</style>
