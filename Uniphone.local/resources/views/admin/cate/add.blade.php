@extends('admin.master')


@section('content')
<form class="content" action="" method="POST" enctype="multipart/form-data" acceptcharset="UTF-8">

           {{csrf_field()}}
            <div class="breadcrumbs">
                  <div class="col-sm-4">
                      <div class="page-header float-left">
                          <div class="page-title">
                              <h1>Thêm Danh Mục</h1>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-8">
                      <div class="page-header float-right">
                          <div class="page-title">
                              <ol class="breadcrumb text-right">
                                  <li class="active"></li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
			<div class="col-lg-12" >
                    <div class="card">
                          <div class="row form-group">
                            <div class="col col-md-1">
                              <label for="text-input" class=" form-control-label" style=" padding: 3px 20px;">Name:</label>
                            </div>
                            <div class="col-12 col-md-11">
                            	<input type="text" id="text-input" name="name" placeholder="name" class="form-control" >
                            </div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-1">
                              <label for="select" class=" form-control-label" style=" padding: 3px 20px;">Parent:</label>
                            </div>
                            <div class="col-12 col-md-11">
                              <select name="id_parent" id="select" class="form-control">

                                <option value="0">Danh muc cha</option>
                                @foreach($parent as $row)
								                <option value="{{$row['id']}}">{{$row['name']}}</option>
                                @endforeach
                              </select>
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
                    </div>
                    
            </div>
        </form>
@endsection