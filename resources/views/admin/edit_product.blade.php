@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật đầu sách
                        </header>
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">',$message,'</span>';
                                Session::put('message', null);
                            }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach($edit_product as $key => $pro)
                                <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field()}}
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên đầu sách</label>
                                        <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$pro->product_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" value="{{$pro->product_price}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" >
                                        <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="70" width="70">
                                    </div>
                                    <div class="form-group">
                                        <label>Thể loại sách</label>
                                        <select name="product_cate" class="form-control input-sm m-bot15">
                                            @foreach($cate_product as $key => $cate)
                                                @if($cate->category_id == $pro->category_id)
                                                <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                                @endif
                                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tác giả</label>
                                        <select name="product_author" class="form-control input-sm m-bot15">
                                            @foreach($author as $key => $au)
                                                @if($au->author_id == $pro->author_id)
                                                <option selected value="{{$au->author_id}}">{{$au->author_name}}</option>
                                                @endif
                                                <option value="{{$au->author_id}}">{{$au->author_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                        <textarea style="resize: none;" rows="8" class="form-control" name="product_desc"  id="exampleInputPassword1">{{$pro->product_desc}}</textarea> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung</label>
                                        <textarea style="resize: none;" rows="8" class="form-control" name="product_content"  id="exampleInputPassword1">{{$pro->product_content}}</textarea> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số trang</label>
                                        <input type="text" name="product_numberOfPages" class="form-control" id="exampleInputEmail1" value="{{$pro->product_numberOfPages}}">
                                    </div>  
                                    <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                                </form>
                                @endforeach
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection