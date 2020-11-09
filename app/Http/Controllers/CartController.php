<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;

class CartController extends Controller
{
    //
    public function save_cart(Request $request){
    	$productId = $request->productid_hidden;
    	$product_info = DB::table('tbl_product')->where('product_id', $productId)->first();

    	//Cart::add('293ad', 'Product 1', 1, 9.99, 550);

    	$data['id'] = $product_info->product_id;
    	$data['quantity'] = 1;
    	$data['name'] = $product_info->product_name;
    	$data['price'] = $product_info->product_price;
    	$data['attributes']['image'] = $product_info->product_image;

    	Cart::add($data);
        return Redirect::to('/show-cart');
    }
    public function show_cart(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $author = DB::table('tbl_author')->where('author_status','1')->orderby('author_id','desc')->get();
        $SpBanChayNhat = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(4)->get();

        return view('pages.cart.show_cart')->with('cate_product', $cate_product)->with('author', $author)->with('banchay_product', $SpBanChayNhat);
    }

    public function delete_to_cart($id){
        Cart::remove($id);
        return Redirect::to('/show-cart');
    }

    public function update_cart_quantity(Request $request){
        
        $idcart = $request -> id_cart;
        $qty = $request -> quantity_cart;

        Cart::update($idcart, array(
            'quantity' => array(
                        'relative' => false,
                        'value' => $qty
            )
         ));
        return Redirect::to('/show-cart');
    }

}
