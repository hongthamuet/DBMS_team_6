<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){

    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();

    	$author = DB::table('tbl_author')->where('author_status','1')->orderby('author_id','desc')->get();

    	$all_product = DB::table('tbl_product')->orderby('product_id','desc')->limit(8)->get();

    	$SpBanChayNhat = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();

    	return view('pages.home')->with('cate_product', $cate_product)->with('author', $author)->with('all_product', $all_product)->with('banchay_product', $SpBanChayNhat);
    }
    public function tim_kiem(Request $request){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();

    	$author = DB::table('tbl_author')->where('author_status','1')->orderby('author_id','desc')->get();

    	$SpBanChayNhat = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();

    	$keywords = $request -> keywords_submit;

    	$search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();

    	return view('pages.product.search')->with('cate_product', $cate_product)->with('author', $author)->with('banchay_product', $SpBanChayNhat)->with('search_product',$search_product);
    }
}
