@extends('admin.master')

@section('content')
<p>
    @if(session('users'))
    {{session('users')}}
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
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
</div>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                	<div class="col-md-12">
		                    <div class="card">
		                        <div class="card-header">
		                            <strong class="card-title">Data Table</strong>
		                        </div>
		                        <div class="card-body">
		                  		<div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row">
		                  			<div class="col-sm-12 col-md-6">
		                  				<div class="dataTables_length" id="bootstrap-data-table_length">
		                  					<label>Show 
		                  						<select name="bootstrap-data-table_length" aria-controls="bootstrap-data-table" class="form-control form-control-sm">
		                  							<option value="10">10</option
		                  								option value="20">20</option><option value="50">50</option><option value="-1">All</option></select> entries</label>
		                  							</div>
		                  						</div>
		                  						<div class="col-sm-12 col-md-6">
		                  							<div id="bootstrap-data-table_filter" class="dataTables_filter">
		                  								<label>Search:
		                  									<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table">
		                  								</label>
		                  							</div>
		                  						</div>
		                  					</div>
		                  					<div class="row">
		                  						<div class="col-sm-12">
		                  							<table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
		                    <thead>
		                      <tr role="row">
		                      	<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">ID</th>
		                      	<th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 345px;">Name</th>
		                      	<th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 553px;">Email</th>
		                      	<th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 204px;">Level</th>
		                      	<th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 204px;">Edit</th>
		                      	<th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 204px;">Delete</th>
		                      </tr>
		                    </thead>
		                    <tbody>
		                      @foreach($user as $item_user)
		                    <tr role="row" class="odd">
		                        <td class="sorting_1">{!! $item_user->id !!}</td>
		                        <td>{!! $item_user->username !!}</td>
		                        <td>{!! $item_user->email !!}</td>
		                        <td>
		                        	@if  ($item_user->id ==  2)
										Supberadmin
		                        	@elseif ($item_user->level ==  1)
										Admin 
									@else  
										Member
									@endif
		                        </td>

		                        <td>
		                        	<a href="">Edit</a>
		                        </td>
		                        <td>
		                        	<a href="{{route('delete_user',$item_user->id)}}">Delete</a>
		                        </td>
		                      </tr>
		                      @endforeach
		                  </tbody>
		                  </table>
		              </div>
		          </div>
		          <div class="row">
		          	<div class="col-sm-12 col-md-5">
		          		<div class="dataTables_info" id="bootstrap-data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
		          	</div>
		          	<div class="col-sm-12 col-md-7">
		          		<div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table_paginate">
		          			<ul class="pagination">
		          				<li class="paginate_button page-item previous disabled" id="bootstrap-data-table_previous">
		          					<a href="#" aria-controls="bootstrap-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
		          				</li>
		          				<li class="paginate_button page-item active">
		          					<a href="#" aria-controls="bootstrap-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
		          				</li>
		          				<li class="paginate_button page-item ">
		          					<a href="#" aria-controls="bootstrap-data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a>
		          				</li>
		          				<li class="paginate_button page-item ">
		          					<a href="#" aria-controls="bootstrap-data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a>
		          				</li>
		          				<li class="paginate_button page-item ">
		          					<a href="#" aria-controls="bootstrap-data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a>
		          				</li>
		          				<li class="paginate_button page-item ">
		          					<a href="#" aria-controls="bootstrap-data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a>
		          				</li>
		          				<li class="paginate_button page-item ">
		          					<a href="#" aria-controls="bootstrap-data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a>
		          				</li>
		          				<li class="paginate_button page-item next" id="bootstrap-data-table_next">
		          					<a href="#" aria-controls="bootstrap-data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
		          				</ul>
		                  </div>

		              </div>
		              <div class="card-footer">
                        <a href="{{route('add_user')}}" class="btn btn-success btn-sm">Add_User
                        </a>
                        
            		</div>
              		</div>
         		</div>
            </div>
        </div>
    </div>


</div>
            </div><!-- .animated -->
        </div>
@endsection