<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\FormRequest;
use App\Models\Category;
use DateTime;
use App\Http\Requests\Request;


class CategoryController extends BaseController
{  
        public function getAdmin(){
            return view('admin.layout_admin.content');
        }
		public function getList(){
            $data = Category::select('id','name','id_parent')->get();
            return view('admin.cate.list', compact('data'));
        }
        //Add
        public function getAdd(){
            $parent = Category::select('id','name','id_parent')->get();

            return view('admin.cate.add', compact('parent'));
        }
        public function postAdd(Request $request){
             //dd($request->all());
            $cate = new Category;
            $cate->name = $request->name;
            $cate->id_parent = $request->id_parent;
            $cate->save();
            return redirect()->route('list');
             
        }
        //Edit
        public function getEdit($id){
            $data = category::findOrFail($id)->toArray();
            $parent = Category::select('id', 'name', 'id_parent')->get()->toArray();
            return view('admin.cate.edit',compact('parent','data','id'));
        }
        public function postEdit(Request $request,$id){
            $this->validate($request,
                ["name" => "required"],
                ["name.required"=>"please enter name cate 1"]
            );
            $cate = Category::find($id);
            $cate->name = $request->name;
            $cate->id_parent = $request->id_parent;
            $cate->save();
            return redirect()->route('list');
        }

        //delete:
            	
        public function getDelete($id) {
            //echo $id;
        $cate = Category::find($id);
        $name = $cate->name;
        $cate->delete();
        return redirect()->route('list')->with([
            "status" => 'Da xoa category: '.$name
        ]);
    }
        
        
        
}