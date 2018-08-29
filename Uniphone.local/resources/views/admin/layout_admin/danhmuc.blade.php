@extends('admin.system.admin')


@section('content')
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
	                              <tbody>
	                              	<?php 
	                              	while(@$row = mysqli_fetch_assoc($result)){
	                              	//while($row = mysqli_fetch_array($result)){ 
	                              		//fa fa-eye-slash
	                              		$hide=$row['hiden'];
	                              		$id=$row['id'];
	                              	?>
	                                <tr>
	                                  <th scope="row"><?=@++$stt?></th>
	                                  <td style="font-family: Arial;"><?=$row['name']?></td>
	                                  <td><i class="fa <?=($hide==0)?'fa-eye-slash color-red':'fa-eye color-green'?>"></i></td>
	                                  <td>
	                                  	
		                                  	<button onClick="window.location='catgory-form/'+<?=$id?>" type="submit" class="btn btn-primary btn-sm">
	                          				<i class="fa fa-edit"></i> Edit
	                        				</button>
	                        				<button onClick="window.location='catgory/delete/'+<?=$id?>"  class="btn btn-primary btn-sm">
	                          				<i class="fa "></i> Delete
	                        				</button>
	                        		
	                                  </td>
	                                </tr>
	                                <?php } ?>
	                              </tbody>
	                            </table>
	                            <button onClick="window.location='catgory-form'" class="btn btn-success btn-sm">Action
	                            </button>	

								       
								    
	                        </div>
	                    </div>
	                </div>

                </div>
</div>
@endsection