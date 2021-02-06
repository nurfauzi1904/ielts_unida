@extends('layout.master')

@section('content')
  <div class="container-fluid">
      <div class="row">
      

            <div id="box2" class="col-sm-8">
               
                <div class="box box-warning">
                  <div >
                    <form method="post" action="{{ route('soalpil.post1') }}"> 
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
                          <label class="col-sm-2 control-label">jawab A</label>
                          <div class="col-sm-10">
                            <textarea class="form-control textarea" name="jawaba" placeholder="Jawab A"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">jawab B</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawabb" placeholder="Jawab B"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">jawab C</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawabc" placeholder="Jawab C"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jawab D</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawabd" placeholder="Jawab D"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">jawab E</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawabe" placeholder="Jawab E"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Kunci</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="kunci" placeholder="Kunci"></textarea>
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

