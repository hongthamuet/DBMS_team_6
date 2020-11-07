@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin người mua
    </div>
    <div class="table-responsive">
        <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">',$message,'</span>';
                Session::put('message', null);
            }
        ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên người mua</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ nhận hàng</th>
            <th>Ghi chú</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$order_by_id1->shipping_name}}</td>
            <td>{{$order_by_id1->shipping_phone}}</td>
            <td>{{$order_by_id1->shipping_address}}</td>
            <td>{{$order_by_id1->shipping_note}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách chi tiết đơn đặt hàng
    </div>
    
    <div class="table-responsive">
        <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">',$message,'</span>';
                Session::put('message', null);
            }
        ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
          </tr>
        </thead>
        <tbody>
            @foreach($order_by_id as $key => $v_con)
          <tr>
            <td>{{$v_con->product_name}}</td>
            <td>{{$v_con->product_price}}</td>
            <td>{{$v_con->product_sales_quantity}}</td>
            <td>{{$v_con->product_price}}</td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection