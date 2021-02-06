@extends('layout.master')

@section('content')
  <div class="container-fluid">
      <div class="row">
      

            <div id="box2" class="col-sm-8">
               
                <div class="box box-warning">
                  <div >
                    <form method="post" action="{{ route('soalessay.post3') }}"> 
                      @csrf
                      
                      
                      <input type="hidden" name="paket_id" value="{{ $id }}">
                      
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Judul Cerita</label>
                        <div class="col-sm-10">
                          <select class="form-control textarea" name="cerita_id">
                            @foreach($cerita as $kolom)
                            <option value="{{$kolom->id}}">{{$kolom->judul}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>


                      <div class="form-group">
                          <label class="col-sm-2 control-label">perintah soal</label>
                          <div class="col-sm-10">
                            <textarea class="form-control textarea" name="perintah_soal" placeholder="perintah soal"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Soal</label>
                          <div class="col-sm-10">
                            <textarea class="form-control textarea" name="isi_soal" placeholder="Soal"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Jawab</label>
                          <div class="col-sm-10">
                            <textarea class="form-control textarea" name="jawab" placeholder="Jawaban"></textarea>
                          </div>
                      </div>
                      
                      <div class="col-auto">
                        <button class="btn btn-outline-success" type="submit">Save</button>
                        <a href={{url("/detail/detailindex/".$id)}}><button type="button" class="btn btn-outline-warning">Cancel</button></a>
                      </div>
                    </form>
                  </div>
                </div>

                

            </div>
      </div>
  </div>
    


    



    
@endsection

