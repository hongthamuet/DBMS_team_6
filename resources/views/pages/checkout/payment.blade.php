@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container-fluid">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán giỏ hàng của bạn</li>
				</ol>
			</div>

			<div class="review-payment">
				<h2>Xem lại giỏ hàng của bạn</h2>
			</div>
			<div class="table-responsive cart_info">
				<?php
					$content = Cart::getContent(); 
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="name">Tên</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td style="text-align: center;">Hủy</td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $v_content)
						<div class="row">
						<tr>
							<td class="col-sm-2" style="text-align: center;">
								<a href=""><img src="public/uploads/product/{{ $v_content->attributes->image }}" alt="" / height="50" style="    width: 30%;"></a>
							</td>	
							<td class="col-sm-3">
								<p>{{ $v_content->name}}</p>
							</td>							
							<td class="col-sm-2">
								<p>{{number_format($v_content->price).' '.'vnđ'}}</p>
							</td>
							<td class="col-sm-2">
								<div class="cart_quantity_button">
									<form action="{{URL::to('update-cart-quantity')}}" method="POST">
									{{ csrf_field() }}
									<input class="cart_quantity_input" type="text" name="quantity_cart" value="{{ $v_content->quantity}}">
									<input type="hidden" value="{{$v_content->id}}" name="id_cart" class="from-control">
									<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-small">

									</form>
								</div>
							</td>
							<td class="col-sm-2">
								<p class="cart_total_price">
									<?php
										$subtotal = $v_content->price * $v_content->quantity;
										echo number_format($subtotal).' '.'vnđ';
									?>
								</p>
							</td>
							<td class="col-sm-1 cart_delete" style="text-align: center;">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->id)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						</div>
						@endforeach
						
					</tbody>
				</table>
			</div>
			<form method="POST" action="{{URL::to('/order-place')}}">
				{{csrf_field()}}
				<input type="submit"  value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-small">
			</form>
		</div>
	</section> <!--/#cart_items-->


@endsection