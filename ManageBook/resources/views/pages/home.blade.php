@extends('layout')
@section('content')

                    <div class="features_items"><!--features_items-->
                        <h2 class="title">Mới nhất</h2>
                        @foreach($all_product as $key => $new_product)
                        <a href="{{URL::to('/chi-tiet-san-pham/'.$new_product->product_id)}}">
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="public/uploads/product/{{ $new_product->product_image }}" alt="" / height="180" style="    width: 70%;">
                                            <h2>{{ $new_product->product_price }}</h2>
                                            <div style="height: 62px"><p>{{ $new_product->product_name }}</p></div>


                                            <form action="{{URL::to('/save-cart')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <span>
                                                            <input name="productid_hidden" type="hidden" value="{{$new_product->product_id}}"/>
                                                            <button type="submit" class="btn btn-fefault cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                Thêm vào giỏ hàng
                                                            </button>
                                                        </span>
                                            </form>
                                        </div>
                                </div>

                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                        @endforeach
                    </div><!--features_items-->
                    
                   
                    
                    
@endsection