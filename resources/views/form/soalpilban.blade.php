@extends('layout.master')

@section('content')
  <div class="container-fluid">
      <div class="row">
      

            <div id="box2" class="col-sm-8">
               
                <div class="box box-warning">
                  <div >
                    <form method="post" action="{{ route('soalpilban.post2') }}"> 
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
                          <label class="col-sm-2 control-label">jawab 1</label>
                          <div class="col-sm-10">
                            <textarea class="form-control textarea" name="jawab1" placeholder="Jawab A"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">jawab 2</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawab2" placeholder="Jawab B"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">jawab 3</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawab3" placeholder="Jawab C"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jawab 4</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawab4" placeholder="Jawab D"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">jawab 5</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawab5" placeholder="Jawab E"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">jawab 6</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawab6" placeholder="Jawab E"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">jawab 7</label>
                        <div class="col-sm-10">
                          <textarea class="form-control textarea" name="jawab7" placeholder="Jawab E"></textarea>
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

