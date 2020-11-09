<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class AuthorController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin.dashboard');
        }
        else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_author(){
        $this->AuthLogin();
    	return view('admin.add_author');
    }
    
    public function all_author(){
        $this->AuthLogin();
    	$all_author = DB::table('tbl_author')->orderby('author_id','desc')->get();
    	$manager_author = view('admin.all_author')->with('all_author', $all_author);
    	return view('admin_layout')->with('admin.all_author', $manager_author);

    }
    public function save_author(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['author_name'] = $request->author_name;
    	$data['author_desc'] = $request->author_desc;
    	$data['author_status'] = $request->author_status;

        $get_image = $request->file('author_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/author', $new_image);
            $data['author_image'] = $new_image;
            DB::table('tbl_author')->insert($data);
            Session::put('message','Thêm tác giả thành công');
            return Redirect::to('all-author');
        }
        $data['author_image'] = '';
    	DB::table('tbl_author')->insert($data);
    	Session::put('message','Thêm tác giả thành công');
    	return Redirect::to('all-author');
    }
    
    public function unactive_author($id){
        $this->AuthLogin();
    	DB::table('tbl_author')->where('author_id',$id)->update(['author_status'=> 1]); 
    	Session::put('message','Kích hoạt tác giả thành công');
    	return Redirect::to('all-author');
    }
    public function active_author($id){
        $this->AuthLogin();
    	DB::table('tbl_author')->where('author_id',$id)->update(['author_status'=> 0]); 
    	Session::put('message','Không kích hoạt tác giả thành công');
    	return Redirect::to('all-author');
    }
    public function edit_author($id){
        $this->AuthLogin();
    	$edit_author = DB::table('tbl_author')->where('author_id',$id)->get();
    	$manager_author = view('admin.edit_author')->with('edit_author', $edit_author);
    	return view('admin_layout')->with('admin.edit_author', $manager_author);
    }
    public function update_author(Request $request, $id){
        $this->AuthLogin();
    	$data = array();
    	$data['author_name'] = $request->author_name;
    	$data['author_desc'] = $request->author_desc;

        $get_image = $request->file('author_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/author', $new_image);
            $data['author_image'] = $new_image;
            DB::table('tbl_author')->where('author_id',$id)->update($data);
            Session::put('message','Cập nhật tác giả thành công');
            return Redirect::to('all-author');
        }

    	DB::table('tbl_author')->where('author_id',$id)->update($data);
    	Session::put('message','Cập nhật tác giả thành công');
    	return Redirect::to('all-author');
    }
    public function delete_author(Request $request, $id){
        $this->AuthLogin();
    	DB::table('tbl_author')->where('author_id',$id)->delete();
    	Session::put('message','Xóa tác giả thành công');
    	return Redirect::to('all-author');
    }

    //End function Admin Page

    public function show_author_home($id){
 
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $author = DB::table('tbl_author')->where('author_status','1')->orderby('author_id','desc')->get();
        $SpBanChayNhat = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();

        $productByIdAuthor = DB::table('tbl_product')->join('tbl_author', 'tbl_product.author_id','=','tbl_author.author_id')->where('tbl_author.author_id',$id)->get();

        $author_name = DB::table('tbl_author')->where('tbl_author.author_id', $id)->limit(1)->get();
        
        return view('pages.author.show_author')->with('cate_product', $cate_product)->with('author', $author)->with('categoryById', $productByIdAuthor)->with('author_name', $author_name)->with('banchay_product', $SpBanChayNhat);
    }
}
