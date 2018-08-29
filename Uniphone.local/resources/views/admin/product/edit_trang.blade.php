@extends('admin.master')

@section('content')

<div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                          {{csrf_field()}}
                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="select" class=" form-control-label" >Tên Danh Mục:</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <select name="parent" id="select" class="form-control">
                    
                                <option value="0">Danh Mục</option>
                                  @foreach($cate as $row)
                                <option  <?=($row['id'] == $product['parent'])? 'selected' : '' ?> value="{{$row['id']}}">{{$row['name']}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Tiêu Đề:</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="titli" placeholder="Text" class="form-control" value="{!! old('titli',isset($product) ? $product['titli'] : null) !!}">
                              <small class="form-text text-muted">This is a help text</small>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Intro:</label></div>
                            <div class="col-12 col-md-9"><textarea name="text" id="textare" rows="9" placeholder="Content..." class="form-control" >{!! old('text',isset($product) ? $product['text'] : null) !!}</textarea></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="textarea-input" class=" form-control-label">Văn Bản:</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <textarea name="keyword" id="textarea-input" rows="9" placeholder="Content..." class="form-control">
                                {!! old('keyword',isset($product) ? $product['keyword'] : null) !!}
                              </textarea>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3">
                              
                              <script>
                                  // Replace the <textarea id="editor1"> with a CKEditor
                                  // instance, using default configuration.
                                  var editor = CKEDITOR.replace( 'textarea-input');
                                    CKFinder.setupCKEditor( editor );


                              </script>
                            </div>
                            
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình Ảnh: </label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="file" id="file-input" name="images" class="form-control-file" value="$product['images']" style="width: 50px; height: 50px;">
                              <img src="{!! asset('public/images/'.$product['images']) !!}">
                            </div>
                          </div>
                          <div class="card-footer">
                        <button type="submit" name="submit"  class="btn btn-primary btn-sm" >
                          <i class="fa #fa-dot-circle-o"></i> Submit
                        </button>
                         <button type="button" class="btn btn-primary btn-sm" onclick="getBack()">Back</button>
                              <script type="text/javascript">
                                function getBack() {
                                  history.go(-1);
                                }   
                              </script>
                        
                      </div>
                        </form>
                      </div>
                      
                    </div>
                   
</div> 
@endsection