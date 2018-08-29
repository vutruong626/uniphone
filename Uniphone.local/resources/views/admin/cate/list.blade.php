@extends('admin.master')

@section('content')
<p>
    @if(session('status'))
    {{session('status')}}
    @endif
</p>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data User</li>
                        </ol>
                    </div>
                </div>
            </div>
</div>
<div class="animated fadeIn">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="breadcrumbs">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1> Danh Mục</h1>
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
                            <div class="card-body">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <td><i class="fa fa-check"></i></td>
                                      <th scope="col">Name</th>
                                      <th scope="col">Hide</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  
                                  @foreach($data as $item)

                                  <tbody>
                                      <td scope="row">{!! $item["id"] !!}</td>
                                      <th style="font-family: Arial;">{!! $item["name"] !!}</th>
                                      <th><i class="fa ">
                                      @if ($item["id_parent"] == 0)
                                            {!! "one" !!}

                                            @else
                                                <?php  
                                                    $parent = DB::table('list')->where('id',$item["id_parent"])->first();
                                                    echo $parent->name;
                                                ?>
                                            @endif</i></th>
                                      <th>
                                        
                                            <button  type="submit" class="btn btn-primary btn-sm">
                                                <a href="{{route('list_edit',$item['id'])}}">
                                                  <i class="fa fa-edit"></i> Edit
                                                </a>
                                            </button>
                                            <button   class="btn btn-primary btn-sm">
                                            <a href="{{route('delete',$item['id'])}}"><i class="fa "></i> Delete</a>
                                            </button>
                                    
                                      </th>
                                    </tr>
                                   
                                  </tbody>
                                  @endforeach
                                </table>
                                <a href="{{route('add')}}" class="btn btn-success btn-sm">Action
                                </a>   

                                       
                                    
                            </div>
                        </div>
                    </div>

                </div>
    </div>
@endsection