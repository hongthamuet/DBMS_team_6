@extends('layout')
@section('content')

                    <div class="features_items" style="padding-top: 5px"><!--features_items-->
                        @foreach($author_name as $key => $name)
                        <h2 class="title">{{$name -> author_name}}</h2>
                        @endforeach
                        @foreach($categoryById as $key => $book)
                        <a href="{{URL::to('/chi-tiet-san-pham/'.$book->product_id)}}">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/uploads/product/'.$book->product_image)}}" alt="" / height="300" width="20">
                                            <h2>{{ $book->product_price }}</h2>
                                            <div style="height: 50px"><p>{{ $book->product_name }}</p></div>
                                            <form action="{{URL::to('/save-cart')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <span>
                                                            <input name="productid_hidden" type="hidden" value="{{$book->product_id}}"/>
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