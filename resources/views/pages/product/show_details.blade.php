@extends('layout')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details"><!--product-details-->
						<div class="row">
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="" / width="90%">
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2 style="text-align: center">{{$value->product_name}}</h2>
								<p><b>Tác giả : </b>{{$value->author_name}}</p>
								<p><b>Thể loại : </b>{{$value->category_name}}</p>
								<p><b>Số trang : </b>{{$value->product_numberOfPages}} </p>
								<img src="images/product-details/rating.png" alt="" />

								<form action="{{URL::to('/save-cart')}}" method="POST">
		                            {{ csrf_field() }}
									<span>
										<span>{{$value->product_price}}</span>
		                                <input name="productid_hidden" type="hidden" value="{{$value->product_id}}"/>
										<button type="submit" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Thêm vào giỏ hàng
										</button>
									</span>
		                        </form>

								<pre>{!!$value->product_desc!!}</pre>								
							</div><!--/product-information-->
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
						<pre>{!!$value->product_content!!}</pre></div>
					</div>
					</div><!--/product-details-->
@endforeach
				<div class="row" style=" margin-top: 20px; padding-top: 20px;  margin-bottom: 30px; padding-left: 0px" >
                    <div style="height: 30px; margin-bottom: 30px;   border-bottom: 2px solid #ecedee;"><h2 class="title" >Có thể bạn quan tâm</h2></div>
                            	@foreach($related_product as $key => $related)
                            	<a href="{{URL::to('/chi-tiet-san-pham/'.$related->product_id)}}">
                                <div class="item active">  
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
		                                        <div class="productinfo text-center">
		                                            <img style=" width: 71%;" src="{{URL::to('public/uploads/product/'.$related->product_image)}}" alt="" / height="200" width="8">
		                                            <form action="{{URL::to('/save-cart')}}" method="POST">
							                            {{ csrf_field() }}
														<span>
															<span>{{$related->product_price}}</span>
							                                <input name="productid_hidden" type="hidden" value="{{$related->product_id}}"/>
															<button type="submit" class="btn btn-fefault cart">
																<i class="fa fa-shopping-cart"></i>
																Thêm vào giỏ hàng
															</button>
														</span>
							                        </form>
		                                        </div>
                                			</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                                    @endforeach
  				</div>                  

@endsection