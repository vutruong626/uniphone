@extends('admin.master')

@section('content')

<div class="col-lg-12">
                    <div class="card">
                      	<div class="card-header">Example Form</div>
                      	<div class="card-body card-block">
                        <form action="" method="post" class="">

                        	{{csrf_field()}}
                          	<div class="form-group">
                            	<div class="input-group">
                              		<div class="input-group-addon"><i class="fa fa-user"></i>
                              		</div>
                              		<input type="text" id="username" name="username" placeholder="Username" class="form-control" value="{!! old('username')!!}">
                            	</div>
                        	</div>
                        <div class="form-group">
                            <div class="input-group">
                              	<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                              	<input type="email" id="email" name="email" placeholder="Email" class="form-control" value="{!! old('email')!!}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                              	<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                              	<input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                              	<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                              	<input type="password" id="password" name="password" placeholder="RePassword" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">User Level</label></div>
                            <div class="col col-md-9">
                              	<div class="form-check-inline form-check">
	                                <label for="inline-radio1" class="form-check-label ">
	                                  <input type="radio" id="inline-radio1" name="inline_1" value="1" class="form-check-input">Admin
	                                </label>
	                                <label for="inline" class="form-check-label ">
	                                  <input type="radio" id="inline-radio2" name="inline_1" value="2" class="form-check-input">Member
	                                </label>
                                
                              	</div>
                            </div>
                          </div>
                          <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>
                        </form>
                      </div>
                    </div>
</div>

@endsection