<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;

use App\Http\Requests\UserRequest;
class UserController extends BaseController
{
	public function getList(){
		$user = User::select('id','username','email','level')->get();
		return view('admin.user.list_user', compact('user'));
	}

	public function getAdd(){
		return view('admin.user.add_user');
	}

	public function postAdd(Request $request){
		//dd($request->all());
		$user = new Users();
		$user->username = $request->username;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->level = $request->inline_1;
		$user->remember_token = $request->_token;
		$user->save();
		return redirect()->route('list_user')->with([
            "User" => 'Da add user: '
        ]);
	}

	public function getEdit(){
		
	}

	public function postEdit(){
		
	}

	public function getDelete(){
		
	}
}