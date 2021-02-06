@extends('layout.master')

@section('content')
  <div class="container-fluid">
      <div class="row">

        <div id="box2" class="col-sm-8">
                <div>
                    <div class="box-header with-border">
                      <h3 class="box-title">Soal Cerita</h3>
                      
                      <div>
                        <form method="post" action="{{ route('cerita.post') }}">
                          @csrf
                          
                          <input type="hidden" value="{{$id}}" name="paket_id"> {{--parsing ngirim data yaitu dr id pada tabel soal dari controller=detailcontroller --}}

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Judul</label>
                            <div class="col-sm-10">
                              <textarea class="form-control textarea" name="judul" placeholder="Judul"></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 control-label">Perintah Cerita</label>
                              <div class="col-sm-10">
                                <textarea class="form-control textarea" name="perintah_cerita" placeholder="perintah soal"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Isi Cerita</label>
                              <div class="col-sm-10">
                                <textarea class="form-control textarea" name="isi_cerita" placeholder="Isi Cerita"></textarea>
                              </div>
                          </div>
                          <div class="col-auto">
                            <button class="btn btn-outline-success" type="submit">Save</button>
                            <a href="{{url("/detail/detailindex/".$id)}}"><button type="button" class="btn btn-outline-warning">Cancel</button></a>
                          </div>
                        </form>

                      </div>
                    </div>
                </div>
 
                

        </div>
      </div>
    </div>
    


    



    
@endsection
