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

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Hãy điền đầy đủ thông tin gửi hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
									{{csrf_field()}}
									<input type="text" name="shipping_name" placeholder="Họ và tên">
									<input type="text" name="shipping_email" placeholder="Email*">
									<input type="text" name="shipping_address" placeholder="Địa chỉ nhận hàng*">
									<input type="text" name="shipping_phone" placeholder="Số điện thoại">
									<textarea name="shipping_note"  placeholder="ghi chú đơn hàng" rows="16"></textarea>
									<input type="submit"  value="Gửi" name="send_order" class="btn btn-primary btn-small">
								</form>
							</div>
						</div>
					</div>				
				</div>
			</div>
			<div class="review-payment">
				<a href="{{URL::to('/show-cart')}}"><h4><i ><u>Xem lại giỏ hàng của bạn</u></i></h4></a>
			</div>
		</div>
	</section> <!--/#cart_items-->


@endsection