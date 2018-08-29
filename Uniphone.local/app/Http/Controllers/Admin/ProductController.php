<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Cate;
use DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends BaseController
{
    public function getAdmin(){
    	
    	return view('admin.layout_admin.content');
    }
    //list_trang
    public function getList(){
    	//$data = Product::select('id','parent','titli','text','keyword','images')->get();
        $data = DB::table('status')
            ->join('list', 'status.parent', '=', 'list.id')
            ->select('status.*', 'list.name')
            ->get();
        //print_r($data);exit;
    	return view('admin.product.list_trang',compact('data'));
    }
    //addd
    public function getAdd(){
    	$cate = Cate::select('id', 'name', 'id_parent')->get()->toArray();
    	return view('admin.product.add_trang', compact('cate'));
    }
    public function postAdd(Request $request){
    	// dd($request->all());
    	$file_name 			= $request->file('images')->getClientOriginalName();

    	$product 			= new Product();
    	$product->parent 	= $request->parent;
    	$product->titli 	= $request->titli;
    	$product->text 		= trim($request->text);
    	$product->keyword 	= $request->keyword;
    	$product->images 	= $file_name;

    	$request->file('images')->move('public/images/',$file_name);
    	$product->save();
    	return redirect()->route('list_product');
    }




    public function getEdit($id){
        $product = Product::find($id);
        $cate = Cate::select('id', 'name', 'id_parent')->get();
        
    	return view('admin.product.edit_trang', compact('cate','product'));
    }

    //edit
    public function postEdit(Request $request,$id){
        $product = Product::find($id);
       
        $product->parent = $request->parent;
        $product->titli = $request->titli;
        $product->text = $request->text;
        $product->keyword = $request->keyword;
        
        
        if (!empty($request->file('images'))){
            $file_name = $request->file('images')->getClientOriginalName();
            //echo $file_name;
            $product->images = $file_name;
            $request->file('images')->move('public/images/'.$file_name);
            
            if (file_exists('public/images/'.$product->images)){
                $product->delete($id);
                }

        }else {
            echo "hk cos file";
        }

        $product->save();
         return redirect()->route('list_product')->with([
            "status" => 'Da update product: '
        ]);
    }

     public function getDelete($id){
        //echo $id;
        $product = Product::find($id);
        if (file_exists('public/images/'.$product->images)){
            unlink('public/images/'.$product->images);
        }
        $product->delete($id);

        // $parent = $product->parent;
        // $product->delete();
        return redirect()->route('list_product')->with([
            "status" => 'Da xoa Product: '
        ]);
    }

}
