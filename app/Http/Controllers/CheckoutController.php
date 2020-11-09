<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();

class CheckoutController extends Controller
{
    //
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin.dashboard');
        }
        else{
            return Redirect::to('admin')->send();
        }
    }
    public function login_checkout(){

    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $author = DB::table('tbl_author')->where('author_status','1')->orderby('author_id','desc')->get();
        $SpBanChayNhat = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();

        return view('pages.checkout.login_checkout')->with('cate_product', $cate_product)->with('author', $author)->with('banchay_product', $SpBanChayNhat);

    }

    public function add_customer(Request $request){

    	$data = array();
    	$data['customer_name'] = $request->customer_name;
    	$data['customer_email'] = $request->customer_email;
    	$data['customer_password'] = md5($request->customer_password);
    	$data['customer_phone'] = $request->customer_phone;
    	$data['customer_address'] = $request->customer_address;

    	$customer_id = DB::table('tbl_customer')->insertGetId($data);

    	Session::put('customer_id', $customer_id);
    	Session::put('customer_name',$request->customer_name);

    	return Redirect('/checkout');
    }

    public function checkout(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $author = DB::table('tbl_author')->where('author_status','1')->orderby('author_id','desc')->get();
        $SpBanChayNhat = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();

        return view('pages.checkout.show_checkout')->with('cate_product', $cate_product)->with('author', $author)->with('banchay_product', $SpBanChayNhat);
    }

    public function save_checkout_customer(Request $request){
    	$data = array();
    	$data['shipping_name'] = $request->shipping_name;
    	$data['shipping_email'] = $request->shipping_email;
    	$data['shipping_address'] = $request->shipping_address;
    	$data['shipping_phone'] = $request->shipping_phone;
    	$data['shipping_note'] = $request->shipping_note;


    	$shipping_id = DB::table('tbl_shipping')->insertGetId($data);

    	Session::put('shipping_id', $shipping_id);

    	return Redirect('/payment');

    }
    public function payment(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $author = DB::table('tbl_author')->where('author_status','1')->orderby('author_id','desc')->get();
        $SpBanChayNhat = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();

        return view('pages.checkout.payment')->with('cate_product', $cate_product)->with('author', $author)->with('banchay_product', $SpBanChayNhat);
    }
    public function order_place(){

        //Thêm vào order
        $order_data = array();
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['order_total'] = Cart::getSubTotal();
        $order_data['order_status'] = 'Đang chờ xử lí';

        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        //Thêm vào order details
        $content = Cart::getContent();
        foreach ($content as $v_content) {
            $order_data_d['order_id'] = $order_id;
            $order_data_d['product_id'] = $v_content->id;
            $order_data_d['product_name'] = $v_content->name;
            $order_data_d['product_price'] = $v_content->price;
            $order_data_d['product_sales_quantity'] = $v_content->quantity;
            DB::table('tbl_order_details')->insert($order_data_d);
        }
        Cart::clear();
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $author = DB::table('tbl_author')->where('author_status','1')->orderby('author_id','desc')->get();
        $SpBanChayNhat = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();
        return view('pages.checkout.success')->with('cate_product', $cate_product)->with('author', $author)->with('banchay_product', $SpBanChayNhat);
        
    }

    public function manage_order(){

        $this->AuthLogin();
        $all_order = DB::table('tbl_order')
        ->join('tbl_shipping','tbl_order.shipping_id','=', 'tbl_shipping.shipping_id')
        ->select('tbl_order.*','tbl_shipping.shipping_name')
        ->orderby('tbl_order.order_id','desc')->get();

        $manager_order = view('admin.manage_order')->with('all_order', $all_order);
        return view('admin_layout')->with('admin.manager_order', $manager_order);

    }
    public function view_order($id){
        $this->AuthLogin();

        $order_by_id = DB::table('tbl_order')
        ->join('tbl_shipping','tbl_order.shipping_id','=', 'tbl_shipping.shipping_id')
        ->join('tbl_order_details','tbl_order.order_id','=', 'tbl_order_details.order_id')
        ->select('tbl_order.*','tbl_order_details.*','tbl_shipping.*')
        ->where('tbl_order.order_id',$id)
        ->get();

        $order_by_id1 = DB::table('tbl_order')
        ->join('tbl_shipping','tbl_order.shipping_id','=', 'tbl_shipping.shipping_id')
        ->join('tbl_order_details','tbl_order.order_id','=', 'tbl_order_details.order_id')
        ->select('tbl_order.*','tbl_order_details.*','tbl_shipping.*')
        ->where('tbl_order.order_id',$id)
        ->first();

        $manager_order = view('admin.view_order')->with('order_by_id', $order_by_id)->with('order_by_id1', $order_by_id1);
        return view('admin_layout')->with('admin.view_order', $manager_order);
    }

}
